<?php
$hostname="localhost";
$user="root";
$pass="";
$database="standard";
$x=mysqli_connect($hostname,$user,$pass,$database);
if($x)
{
	echo "data connected";

}
else
{
	echo "error".mysqli_connect_error();
}
?>
