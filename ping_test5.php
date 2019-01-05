<?php

$url1=$_SERVER['REQUEST_URI'];
header("Refresh: 10; URL=$url1");


print "<br>";


$ip_address = '119.93.235.95'; // IP address you'd like to ping.
exec("ping -c 1 " . $ip_address . " | head -n 2 | tail -n 1 | awk '{print $7}'", $ping_time);
print "Bacolod average " . $ping_time[0] . " ms"; // First item in array, since exec returns an array.
print "<br>";
$ip_address = '122.3.146.74'; // IP address you'd like to ping.
exec("ping -c 1 " . $ip_address . " | head -n 2 | tail -n 1 | awk '{print $7}'", $ping_time);
print "Porac average " . $ping_time[1] . " ms"; // First item in array, since exec returns an array.
print "<br>";
$ip_address = '192.168.3.5'; // IP address you'd like to ping.
exec("ping -c 1 " . $ip_address . " | head -n 2 | tail -n 1 | awk '{print $7}'", $ping_time);
print "192.168.3.5 average " . $ping_time[2] . " ms"; // First item in array, since exec returns an array.
print "<br>";
$ip_address = '192.168.10.2'; // IP address you'd like to ping.
exec("ping -c 1 " . $ip_address . " | head -n 2 | tail -n 1 | awk '{print $7}'", $ping_time);
print "192.168.10.5 average " . $ping_time[3] . " ms"; // First item in array, since exec returns an array.
print "<br>";
$ip_address = '10.2.1.1'; // IP address you'd like to ping.
exec("ping -c 1 " . $ip_address . " | head -n 2 | tail -n 1 | awk '{print $7}'", $ping_time);
print "LIIP average " . $ping_time[4] . " ms"; // First item in array, since exec returns an array.
print "<br>";
$ip_address = '10.2.0.4'; // IP address you'd like to ping.
exec("ping -c 1 " . $ip_address . " | head -n 2 | tail -n 1 | awk '{print $7}'", $ping_time);
print "R2 average " . $ping_time[5] . " ms"; // First item in array, since exec returns an array.
print "<br>";
$ip_address = '10.2.0.6'; // IP address you'd like to ping.
exec("ping -c 1 " . $ip_address . " | head -n 2 | tail -n 1 | awk '{print $7}'", $ping_time);
print "MtView average " . $ping_time[6] . " ms"; // First item in array, since exec returns an array.
print "<br>";
$ip_address = '10.2.0.5'; // IP address you'd like to ping.
exec("ping -c 1 " . $ip_address . " | head -n 2 | tail -n 1 | awk '{print $7}'", $ping_time);
print "WEI average " . $ping_time[7] . " ms"; // First item in array, since exec returns an array.
print "<br>";

?>