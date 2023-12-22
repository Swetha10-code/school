<?php
include_once("configprincipal.php");
if(isset($_POST['update']))
{
	$sno=$_POST['sno'];
	$name=$_POST['name'];
	$class=$_POST['class'];
	$mark=$_POST['mark'];
	$fees=$_POST['fees'];
	$balance=$_POST['bal'];
	$result=mysqli_query($x, "UPDATE info SET name='$name',sno='$sno' , mark='$mark', fees='$fees', bal='$balance' WHERE class='$class'");
	header("location:edit_del_index_pri.php");

}
?>

<?php
$sno=$_GET['sno'];
$result=mysqli_query($x, "SELECT * FROM info WHERE class='$class'");
while($res=mysqli_fetch_assoc($result))
{
	$a=$res['name'];
	$b=$res['class'];
	$c=$res['mark'];
	$d=$res['fees'];
	$e=$res['bal'];
}
?>
<a href="edit_del_index_pri.php">home</a>
<br/><br/>

<form name="form1" method="post" action="edit.php">
<table border="0">
	<tr>
		<td>name</td>
		<td><input type="text" name="name" value="<?php echo $a; ?>"></td>
	</tr>
	<tr>
		<td>class</td>
		<td><input type="text" name="class" value="<?php echo $b; ?>"></td>
	</tr>
	<tr>
		<td>mark</td>
		<td><input type="text" name="mark" value="<?php echo $c; ?>"></td>
	</tr>
	<tr>
		<td>fees</td>
		<td><input type="text" name="fees" value="<?php echo $d; ?>"></td>
	</tr>
	<tr>
		<td>balance</td>
		<td><input type="text" name="bal" value="<?php echo $e; ?>"></td>
	</tr>
	<tr>
		<td><input type="hidden" name="sno" value="<?php echo $_GET['sno']; ?>"></td>
		<td><input type="submit" name="update" value="update"></td>
	</tr>
</table>
</form>
