<?php
require 'confi.php';
$a=$_POST['name'];
$b=$_POST['pass'];

$y="SELECT * FROM info WHERE name='$a' AND pass='$b'";
$result=mysqli_query($x,$y);

if(mysqli_num_rows($result))
{
	$row=mysqli_fetch_assoc($result);
	if($row['distination']=='admin')
	{
        header("location:admin.html");
	}
	else if($row['distination']=='staff')
	{
        header("location:staff.php");
	}
	else
	{
        header("location:principal.php");
	}

}
else
{
   echo"error".mysqli_connect_error();
}
?>