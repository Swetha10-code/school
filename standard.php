<?php
require 'configure.php';
$a=$_POST['name'];
$b=$_POST['section'];
$c=$_POST['std'];
$d=$_POST['age'];
$y="INSERT INTO `info`(`name`,`section`,`std`,`age`) VALUES ('$a','$b','$c','$d')";
if(mysqli_query($x,$y))
{
	echo "data added";
}
else
{
	echo "error".mysqli_connect_error();
}

?>