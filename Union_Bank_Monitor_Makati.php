<?php

$url1=$_SERVER['REQUEST_URI'];
header("Refresh: 10; URL=$url1");

$server = '192.168.1.136:1433';
$database = 'UBANK';
$user = 'sa';
$password = 'AACIDbase1';

$link = mssql_connect ($server, $user, $password);
if (!$link)
{
	die('ERROR: Could not connect: ' . mssql_get_last_message());
}

mssql_select_db($database);

$query = 'select T1.Id, T1.APV_No, T1.BeneficiaryName, T1.Amount, T2.Location, T2.BatchReference,
	T1.CreateDate, T1.CreateTime 
FROM ePayout_DTLS T1
INNER JOIN ePayout_HDR T2 ON T1.Id = T2.Id
WHERE T1.CreateDate = CONVERT(VARCHAR, GETDATE(), 23) and T2.Location = "Makati"
ORDER by BatchReference';

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

print "<br>";

$server = '192.168.1.136:1433';
$database = 'UBANK';
$user = 'sa';
$password = 'AACIDbase1';

$link = mssql_connect ($server, $user, $password);
if (!$link)
{
	die('ERROR: Could not connect: ' . mssql_get_last_message());
}

mssql_select_db($database);

$query = 'SELECT Invoice_Number, Vendot_Code, Bene_Account_Name, Pickup_Location, Payment_Amount,
    Create_Date, Create_Time, Cut_Off
from APInvDetails 
WHERE Create_Date = CONVERT(VARCHAR, GETDATE(), 23) and Pickup_Location = " "';

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

print "<br>";

?>