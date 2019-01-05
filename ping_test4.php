<?php

function ping($host)

{
	exec("ping -c 1 " . $host . " | head -n 2 | tail -n 1 | awk '{print $7}'", $ping_time);
}


$host = '119.93.235.95'
$up = ping($host)
echo $ping_time


?>