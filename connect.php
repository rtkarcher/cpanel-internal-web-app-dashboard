<?php
$hostname = "localhost";
$database = "DB";
$username = "DBUSER";
$password = "PASSWD";
$connection = mysql_connect($hostname, $username, $password) or die(mysql_error());

mysql_connect('localhost', 'DBUSER', 'PASSWD)') or die(mysql_error());
mysql_select_db($database, $connection) or die(mysql_error());
?>

