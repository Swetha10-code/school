<?php
include_once("configprincipal.php");
if(isset($_POST['update']))
{
	$sno=$_POST['sno'];
	$name=$_POST['name'];
	$std=$_POST['std'];
	$mark=$_POST['mark'];
	$fees=$_POST['fees'];
	$bal=$_POST['bal'];
	$password=$_POST['password'];
	$result=mysqli_query($x,"UPDATE info SET name='$name',std='$std',mark='$mark',fees='$fees', bal='$bal',password='$password' WHERE sno='$sno'");
	header("location:principal.php");
}
?>
<?php
$sno=$_GET['sno'];
$result=mysqli_query($x,"SELECT * FROM info WHERE sno='$sno'");
while($res=mysqli_fetch_assoc($result))
{
	$a=$res['name'];
	$b=$res['std'];
	$c=$res['mark'];
	$d=$res['fees'];
	$e=$res['bal'];
	$f=$res['password'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<a href="principal.php">home</a>
	<br>
	<form name="form1" method="POST" action="edit.php">
		<table border="0">
			<tr>
				<td>name</td>
				<td><input type="text" name="name" value="<?php echo $a;?>"></td>
			</tr>
			<tr>
				<td>std</td>
				<td><input type="text" name="std" value="<?php echo $b;?>"></td>
			</tr>
			<tr>
				<td>mark</td>
				<td><input type="text" name="mark" value="<?php echo $c;?>"></td>
			</tr>
			<tr>
				<td>fees</td>
				<td><input type="text" name="fees" value="<?php echo $d;?>"></td>
			</tr>
			<tr>
				<td>balance</td>
				<td><input type="text" name="bal" value="<?php echo $e;?>"></td>
			</tr>
			<tr>
				<td>password</td>
				<td><input type="text" name="password" value="<?php echo $f;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="sno" value="<?php echo $_GET['sno']?>"></td>
				<td><input type="submit" name="update" value="update"></td>
			</tr>
		</table>
		
	</form>

</body>
</html>