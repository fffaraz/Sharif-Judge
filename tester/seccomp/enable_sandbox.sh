#!/bin/bash
# IN THE NAME OF ALLAH
echo -e "\nLinux Kernel Version: $(uname -r)\n"
echo "" > missing_syscalls.h
rm ./example ./example.o ./syscall-reporter.o >/dev/null 2>/dev/null
autoconf
./configure
make
while ! ./example <example.c >tmp ; do
	out=$(cat tmp)
	if [ "$(echo $out|cut -d" " -f1)" != "Looks" ]; then
		echo -e "\nCannot enable.\n";
		exit 1;
	fi
	echo -e "\n$out\n"
	missing_syscall=$(echo $out | cut -d" " -f7)
	echo "ALLOW_SYSCALL($missing_syscall)," >> missing_syscalls.h
	touch example.c
	make
done

out=$(cat tmp)
rm tmp
echo -e "\n$out\n"
