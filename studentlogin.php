<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<script type="text/javascript" src="bootstrap.min.js"></script>
	<script type="text/javascript" src="jquery.min.js"></script>
</head>
<body>
<div>
	
	
<?php
require("configure_student.php");
$a=$_POST['name'];
$b=$_POST['password'];
$y="SELECT * FROM info WHERE name='$a'AND password='$b' ";
$result=mysqli_query($x,$y);
if($res=mysqli_fetch_assoc($result))
{ 

         $sno=$res['sno'];
         header("Location:viewstd.php?sno=$res[sno]");
          }
	
	

else
{
	header("location:error.php");
}
?>
</div>

</body>
