<?php
$dbhost='localhost';
$dbuser='root';
$dbpassword='root';
$conn=mysql_connect($dbhost, $dbuser, $dbpassword);
$db='userdb';
mysql_select_db($db) or die(mysql_error());
if (!$conn)
{
	die(mysql_error());
}
?>
