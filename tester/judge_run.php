<?php
set_time_limit(0); 
echo "START\r\n";
while (true) 
{
	shell_exec("php queue_process.php");
	sleep(60);
}
echo "END\r\n";
