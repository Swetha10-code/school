<?php
$hostname="localhost";
$user="root";
$pass="";
$database="school";
$x=mysqli_connect($hostname,$user,$pass,$database);
if($x)
{
	echo "database connected";

}
else
{
	echo "error".mysqli_connect_error();
}
?>