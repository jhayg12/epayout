<?php

$url1=$_SERVER['REQUEST_URI'];
header("Refresh: 10; URL=$url1");

$server = '192.168.1.10:1433';
$database = 'AACIProd';
$user = 'sa';
$password = 'AACIDbase1';

$link = mssql_connect ($server, $user, $password);
if (!$link)
{
	die('ERROR: Could not connect: ' . mssql_get_last_message());
}

mssql_select_db($database);

$query = file_get_contents("login.sql");

$result = mssql_query($query);
if (!$result) 
{
	$message = 'ERROR: ' . mssql_get_last_message();
	return $message;
}
else
{
	$i = 0;
	echo '<html><body><table><tr>';
	while ($i < mssql_num_fields($result))
	{
		$meta = mssql_fetch_field($result, $i);
		echo '<td>' . $meta->name . '</td>';
		$i = $i + 1;
	}
	echo '</tr>';
	
	while ( ($row = mssql_fetch_row($result))) 
	{
		$count = count($row);
		$y = 0;
		echo '<tr>';
		while ($y < $count)
		{
			$c_row = current($row);
			echo '<td>' . $c_row . '</td>';
			next($row);
			$y = $y + 1;
		}
		echo '</tr>';
	}
	mssql_free_result($result);
	
	echo '</table></body></html>';
}
?>