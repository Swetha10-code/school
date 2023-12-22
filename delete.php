<?php
include("configprincipal.php");
$sno=$_GET['sno'];
$result=mysqli_query($x,"DELETE FROM info WHERE sno=$sno");
header("location:principal.php");
?>
<br>
<?php
include("configprincipal.php");
$std=$_GET['std'];
$result=mysqli_query($x,"DELETE FROM info WHERE std=$std");
header("location:principal.php");
?>
<br>
<?php
include("configuration_staff.php");
$id=$_GET['id'];
$result=mysqli_query($x,"DELETE FROM info WHERE id='$id'");
header("location:principal.php");
?>