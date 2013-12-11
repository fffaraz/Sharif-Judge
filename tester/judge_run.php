<?php
set_time_limit(0); 
echo "START\r\n";
$iiijjj  = 0;
while (true) 
{
	$iiijjj++;
	echo "Exec $iiijjj \r\n";
	shell_exec("php queue_process.php");
	echo "Finish $iiijjj \r\n";
	sleep(60);
}
echo "END\r\n";
