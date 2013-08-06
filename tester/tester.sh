#!/bin/bash

#    In the name of ALLAH
#    Sharif Judge
#    Copyright (C) 2013  Mohammad Javad Naderi <mjnaderi@gmail.com>
#
#    This program is free software: you can redistribute it and/or modify
#    it under the terms of the GNU General Public License as published by
#    the Free Software Foundation, either version 3 of the License, or
#    (at your option) any later version.
#
#    This program is distributed in the hope that it will be useful,
#    but WITHOUT ANY WARRANTY; without even the implied warranty of
#    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#    GNU General Public License for more details.
#
#    You should have received a copy of the GNU General Public License
#    along with this program.  If not, see <http://www.gnu.org/licenses/>.


##################### Example Usage #####################
# tester.sh /home/mohammad/judge/homeworks/hw6/p1 mjn problem problem c 1 50000 diff -iw 1 1 1 1
# In this example judge assumes that the file is located at:
# /home/mohammad/judge/homeworks/hw6/p1/mjn/problem.c
# And test cases are located at:
# /home/mohammad/judge/homeworks/hw6/p1/in/  {input1.txt, input2.txt, ...}
# /home/mohammad/judge/homeworks/hw6/p1/out/ {output1.txt, output2.txt, ...}


####################### Output #######################
#    Output         Meaning
#      0              score form 10000
#      1              Compilation Error
#      2              Syntax Error
#      3              Bad System Call
#      4              Special Judge Script is Invalid
#      5              File format not supported

################### Getting Arguments ###################
PROBLEMPATH=${1} # problem directory
UN=${2} # username
MAINFILENAME=${3} # used only for java
FILENAME=${4} # file name without extension
EXT=${5} # file extension
TIMELIMIT=${6}
MEMLIMIT=${7}
DIFFTOOL=${8}
DIFFOPTION=${9}
if [ ${10} = "1" ]; then
	LOG_ON=true
else
	LOG_ON=false
fi
if [ ${11} = "1" ]; then
	SANDBOX_ON=true
else
	SANDBOX_ON=false
fi
if [ ${12} = "1" ]; then
	SHIELD_ON=true
else
	SHIELD_ON=false
fi
if [ ${13} = "1" ]; then
	JAVA_POLICY="-Djava.security.manager -Djava.security.policy=java.policy"
else
	JAVA_POLICY=""
fi
# DIFFOPTION can be "ignore_all_whitespace". In this case, before diff command,
# all newlines and whitespaces will be removed from both files.
if [ "$DIFFOPTION" = "" ]; then
	DIFFOPTION="-bB"
fi
if [ "$DIFFOPTION" != "ignore_all_whitespace" ]; then
	DIFFARGUMENT=$DIFFOPTION
fi


LOG="$PROBLEMPATH/$UN/log"; echo "" >>$LOG
function judge_log {
	#echo -e "$1"
	if $LOG_ON; then
		echo -e "$1" >>$LOG 
	fi
}

judge_log "Starting tester..."


#################### Initialization #####################
PERL_EXISTS=true
hash perl 2>/dev/null || PERL_EXISTS=false

TST="$(ls $PROBLEMPATH/in | wc -l)"  # Number of Test Cases
JAIL=jail-$RANDOM
if ! mkdir $JAIL; then
	exit
fi
cd $JAIL
cp ../timeout ./timeout
chmod +x timeout

judge_log "$(date)"
judge_log "Time Limit: $TIMELIMIT s"
judge_log "Memory Limit: $MEMLIMIT kB"
judge_log "SANDBOX_ON: $SANDBOX_ON"
judge_log "SHIELD_ON: $SHIELD_ON"
judge_log "JAVA_POLICY: \"$JAVA_POLICY\""
#echo -e "\nJAILPATH="$PROBLEMPATH/$UN/jail"\nEXT="$EXT"\nTIME LIMIT="$TIMELIMIT"\nMEM LIMIT="$MEMLIMIT"\nSECURITY HEADER="$HEADER"\nTEST CASES="$TST"\nDIFF PARAM="$DIFFOPTION"\n" >>$LOG

########################################################################################################
############################################ COMPILING JAVA ############################################
########################################################################################################
if [ "$EXT" = "java" ]; then
	cp $PROBLEMPATH/$UN/$FILENAME.$EXT $MAINFILENAME.$EXT
	judge_log "Compiling as Java"
	javac $MAINFILENAME.$EXT >/dev/null 2>cerr
	EXITCODE=$?
	if [ $EXITCODE -ne 0 ]; then
		judge_log "Compile Error"
		judge_log "$(cat cerr|head -10)"
		echo '<span class="shj_b">Compile Error</span>' >$PROBLEMPATH/$UN/result.html
		echo '<span class="shj_r">' >> $PROBLEMPATH/$UN/result.html
		#filepath="$(echo "${JAIL}/${FILENAME}.${EXT}" | sed 's/\//\\\//g')" #replacing / with \/
		(cat cerr | head -10 | sed 's/&/\&amp;/g' | sed 's/</\&lt;/g' | sed 's/>/\&gt;/g' | sed 's/"/\&quot;/g') >> $PROBLEMPATH/$UN/result.html
		#(cat $JAIL/cerr) >> $PROBLEMPATH/$UN/result.html
		echo "</span>" >> $PROBLEMPATH/$UN/result.html
		cd ..
		rm -r $JAIL >/dev/null 2>/dev/null
		echo 1
		exit 0
	fi
fi

########################################################################################################
########################################## COMPILING PYTHON 3 ##########################################
########################################################################################################
if [ "$EXT" = "py" ]; then
	cp $PROBLEMPATH/$UN/$FILENAME.$EXT $FILENAME.$EXT
	judge_log "Checking Python Syntax"
	python3 -O -m py_compile $FILENAME.$EXT >/dev/null 2>cerr
	EXITCODE=$?
	judge_log "Syntax checked. Exit Code=$EXITCODE"
	if [ $EXITCODE -ne 0 ]; then
		judge_log "Syntax Error"
		judge_log "$(cat cerr | head -10)"
		echo '<span class="shj_b">Syntax Error</span>' >$PROBLEMPATH/$UN/result.html
		echo '<span class="shj_r">' >> $PROBLEMPATH/$UN/result.html
		(cat cerr | head -10 | sed 's/&/\&amp;/g' | sed 's/</\&lt;/g' | sed 's/>/\&gt;/g' | sed 's/"/\&quot;/g') >> $PROBLEMPATH/$UN/result.html
		echo "</span>" >> $PROBLEMPATH/$UN/result.html
		cd ..
		rm -r $JAIL >/dev/null 2>/dev/null
		echo 2
		exit 0
	fi
fi

########################################################################################################
############################################ COMPILING C/C++ ###########################################
########################################################################################################
if [ "$EXT" = "c" ] || [ "$EXT" = "cpp" ]; then
	COMPILER="gcc"
	if [ "$EXT" = "cpp" ]; then
		COMPILER="g++"
	fi
	cp $PROBLEMPATH/$UN/$FILENAME.$EXT code.c
	judge_log "Compiling as $EXT"
	if $SANDBOX_ON; then
		judge_log "Enabling EasySandbox"
		cp ../easysandbox/EasySandbox.so EasySandbox.so
		chmod +x EasySandbox.so
	fi
	if $SHIELD_ON; then
		judge_log "Enabling Shield"
		cp ../shield/shield.$EXT shield.$EXT
		cp ../shield/def$EXT.h def.h
		# adding define to beginning of code
		echo '#define main themainmainfunction' | cat - code.c > thetemp && mv thetemp code.c
		$COMPILER shield.$EXT -lm -O2 -o $FILENAME >/dev/null 2>cerr
	else
		$COMPILER code.$EXT -lm -O2 -o $FILENAME >/dev/null 2>cerr
	fi
	EXITCODE=$?
	judge_log "Compiled. Exit Code=$EXITCODE"
	if [ $EXITCODE -ne 0 ]; then
		judge_log "Compile Error"
		judge_log "$(cat cerr | head -10)"
		echo '<span class="shj_b">Compile Error<br>Error Messages: (line numbers are not correct)</span>' >$PROBLEMPATH/$UN/result.html
		echo '<span class="shj_r">' >> $PROBLEMPATH/$UN/result.html
		SHIELD_ACT=false
		if $SHIELD_ON; then
			while read line; do
				if [ "`echo $line|cut -d" " -f1`" = "#define" ]; then
					if grep -wq $(echo $line|cut -d" " -f3) cerr; then
						echo `echo $line|cut -d"/" -f3` >> $PROBLEMPATH/$UN/result.html
						SHIELD_ACT=true
						break
					fi
				fi
			done <def.h
		fi
		if ! $SHIELD_ACT; then
			echo -e "\n" >> cerr
			echo "" > cerr2
			while read line; do
				if [ "`echo $line|cut -d: -f1`" = "code.c" ]; then
					echo ${line#code.c:} >>cerr2
				fi
			done <cerr
			(cat cerr2 | head -10 | sed 's/themainmainfunction/main/g' ) > cerr;
			(cat cerr | sed 's/&/\&amp;/g' | sed 's/</\&lt;/g' | sed 's/>/\&gt;/g' | sed 's/"/\&quot;/g') >> $PROBLEMPATH/$UN/result.html
		fi
		echo "</span>" >> $PROBLEMPATH/$UN/result.html
		cd ..
		rm -r $JAIL >/dev/null 2>/dev/null
		echo 1
		exit 0
	fi
fi

########################################################################################################
################################################ TESTING ###############################################
########################################################################################################
judge_log "\nTesting..."
judge_log "ulimit -t `echo "$TIMELIMIT/1+1"|bc`"

echo "" >$PROBLEMPATH/$UN/result.html

PASSEDTESTS=0

for((i=1;i<=TST;i++)); do
	judge_log "TEST$i"
	#sleep 0.05
	echo "<span class=\"shj_b\">Test $i </span>" >>$PROBLEMPATH/$UN/result.html
	if [ "$EXT" != "java" ]; then # TODO memory limit for java
		ulimit -v $((MEMLIMIT+10000))
		ulimit -m $((MEMLIMIT+10000))
		#ulimit -s $((MEMLIMIT+10000))
	fi
	ulimit -t `echo "$TIMELIMIT/1+1"|bc` # kar az mohkamkari eyb nemikone!
	
	touch err
	
	if [ "$EXT" = "java" ]; then
		cp ../java.policy java.policy
		if $PERL_EXISTS; then
			./timeout --just-kill -nosandbox -t $TIMELIMIT java $JAVA_POLICY $MAINFILENAME  <$PROBLEMPATH/in/input$i.txt >out 2>err
		else
			java $JAVA_POLICY $MAINFILENAME  <$PROBLEMPATH/in/input$i.txt >out 2>err
		fi
		EXITCODE=$?
	elif [ "$EXT" = "c" ] || [ "$EXT" = "cpp" ]; then
		#$TIMEOUT ./$FILENAME <$PROBLEMPATH/in/input$i.txt >out 2>/dev/null
		if $SANDBOX_ON; then
			#LD_PRELOAD=./EasySandbox.so ./$FILENAME <$PROBLEMPATH/in/input$i.txt >out 2>/dev/null
			if $PERL_EXISTS; then
				./timeout --just-kill --sandbox -t $TIMELIMIT -m $MEMLIMIT ./$FILENAME <$PROBLEMPATH/in/input$i.txt >out 2>err
			else
				LD_PRELOAD=./EasySandbox.so ./$FILENAME <$PROBLEMPATH/in/input$i.txt >out 2>err
			fi
			EXITCODE=$?
			# remove <<entering SECCOMP mode>> from beginning of output:
			tail -n +2 out >thetemp && mv thetemp out
		else
			#./$FILENAME <$PROBLEMPATH/in/input$i.txt >out 2>/dev/null
			if $PERL_EXISTS; then
				./timeout --just-kill -nosandbox -t $TIMELIMIT -m $MEMLIMIT ./$FILENAME <$PROBLEMPATH/in/input$i.txt >out 2>err
			else
				./$FILENAME <$PROBLEMPATH/in/input$i.txt >out 2>err
			fi
			EXITCODE=$?
		fi
	elif [ "$EXT" = "py" ]; then
		./timeout --just-kill -nosandbox -t $TIMELIMIT -m $MEMLIMIT python3 -O $FILENAME.$EXT <$PROBLEMPATH/in/input$i.txt >out 2>err
		EXITCODE=$?
		echo "<span>" >>$PROBLEMPATH/$UN/result.html
		(cat err | head -5 | sed "s/$FILENAME.$EXT//g" | sed 's/&/\&amp;/g' | sed 's/</\&lt;/g' | sed 's/>/\&gt;/g' | sed 's/"/\&quot;/g') >> $PROBLEMPATH/$UN/result.html
		echo "</span>" >>$PROBLEMPATH/$UN/result.html
	else
		judge_log "File format not supported."
		cd ..
		rm -r $JAIL >/dev/null 2>/dev/null
		echo 5
		exit 0
	fi

	judge_log "Exit Code=$EXITCODE"

	if ! grep -q "FINISHED" err; then
		if grep -q "SHJ_TIME" err; then
			t=`grep "SHJ_TIME" err|cut -d" " -f3`
			judge_log "Time Limit Exceeded ($t s)"
			echo "<span class=\"shj_o\">Time Limit Exceeded ($t s)</span>" >>$PROBLEMPATH/$UN/result.html
			continue
		elif grep -q "SHJ_MEM" err; then
			judge_log "Memory Limit Exceeded"
			echo "<span class=\"shj_o\">Memory Limit Exceeded</span>" >>$PROBLEMPATH/$UN/result.html
			continue
		elif grep -q "SHJ_HANGUP" err; then
			judge_log "Hang Up"
			echo "<span class=\"shj_o\">Process hanged up</span>" >>$PROBLEMPATH/$UN/result.html
			continue
		elif grep -q "SHJ_SIGNAL" err; then
			judge_log "Killed by a signal"
			echo "<span class=\"shj_o\">Killed by a signal</span>" >>$PROBLEMPATH/$UN/result.html
			continue
		fi
	fi
	
	if [ $EXITCODE -eq 137 ]; then
		#judge_log "Time Limit Exceeded (Exit code=$EXITCODE)"
		#echo "<span style='color: orange;'>Time Limit Exceeded</span>" >>$PROBLEMPATH/$UN/result.html
		judge_log "Killed"
		echo "<span class=\"shj_o\">Killed</span>" >>$PROBLEMPATH/$UN/result.html
		continue
	fi


	if [ $EXITCODE -ne 0 ]; then
		judge_log "Runtime Error"
		echo "<span class=\"shj_o\">Runtime Error</span>" >>$PROBLEMPATH/$UN/result.html
		continue
	fi
	
	# checking correctness of output
	ACCEPTED=false
	if [ -e "$PROBLEMPATH/tester.cpp" ]; then
		cp $PROBLEMPATH/tester.cpp tester.cpp
		g++ tester.cpp -otester
		EC=$?
		if [ $EC -ne 0 ]; then
			echo 4
			cd ..
			rm -r $JAIL >/dev/null 2>/dev/null
			exit 0
		fi
		./tester $PROBLEMPATH/in/input$i.txt out
		EC=$?
		if [ $EC -eq 0 ]; then
			ACCEPTED=true
		fi
	else
		cp $PROBLEMPATH/out/output$i.txt correctout
		if [ "$DIFFOPTION" = "ignore_all_whitespace" ];then #removing all newlines and whitespaces before diff
			tr -d ' \t\n\r\f' <out >tmp1 && mv tmp1 out;
			tr -d ' \t\n\r\f' <correctout >tmp1 && mv tmp1 correctout;
		fi
		if $DIFFTOOL out correctout $DIFFARGUMENT >/dev/null 2>/dev/null
		then
			ACCEPTED=true
		fi
	fi

	if $ACCEPTED; then
		judge_log "ACCEPTED"
		echo "<span class=\"shj_g\">ACCEPT</span>" >>$PROBLEMPATH/$UN/result.html
		((PASSEDTESTS=$PASSEDTESTS+1))
	else
		judge_log "WRONG"
		echo "<span class=\"shj_r\">WRONG</span>" >>$PROBLEMPATH/$UN/result.html
	fi
done

cd ..
rm -r $JAIL >/dev/null 2>/dev/null # removing files
((SCORE=PASSEDTESTS*10000/TST)) # give score from 10,000
judge_log "\nScore from 10000: $SCORE"
echo $SCORE
exit 0
