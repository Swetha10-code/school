<?php
$host="localhost";
$user="root";
$pass="";
$database="staff";
$x=mysqli_connect($host,$user,$pass,$database);
if ($x)
{
	echo "";
}
else
{
	echo "error".mysqli_connect_error();
}
?>