<?php
require 'configuration_staff.php';
$a=$_POST['title'];
$b=$_POST['rea'];
$y="INSERT INTO `info`(`title`,`rea`) 	VALUES ('$a','$b')";
if (mysqli_query($x,$y))
{
	echo "data added";

}
else
{
	echo "error".mysqli_connect_error();
}
?>