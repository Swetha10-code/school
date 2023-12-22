<?php
require 'configpro.php';
$a=$_POST['name'];
$b=$_POST['pass'];
$c=$_POST['distination'];
$y="INSERT INTO `info`(`name`,`pass`,`distination`) VALUES ('$a','$b','$c')";
if(mysqli_query($x,$y))
{
	echo "data added";
}
else
{
	echo "error".mysqli_connect_error();
}
?>