<?php

$ip_address = '119.93.235.95'; // IP address you'd like to ping.
exec("ping -c 1 " . $ip_address . " | head -n 2 | tail -n 1 | awk '{print $7}'", $ping_time);
print "Bacolod average " . $ping_time[0] . " xxx"; // First item in array, since exec returns an array.

print "<br>";

$ip_address = '122.3.146.74'; // IP address you'd like to ping.
exec("ping -c 1 " . $ip_address . " | head -n 2 | tail -n 1 | awk '{print $7}'", $ping_time);
print "Porac average " . $ping_time[1] . " xxx"; // First item in array, since exec returns an array.

print "<br>";

?>