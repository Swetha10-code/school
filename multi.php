<table border="1">
<tr>
	<td>sno</td>
	<td>name</td>
	<td>section</td>
	<td>std</td>
	<td>age</td>

</tr>
<?php
include_once ("configuration.php");
$std=$_GET['std'];
$result = mysqli_query($x, "SELECT * FROM info WHERE std='$std'");

while ($res = mysqli_fetch_assoc($result))
{
	echo "<tr>";
	echo "<td>".$res['sno']."</td>
	<td>".$res['name']."</td>
	<td>".$res['section']."</td>
	<td>".$res['std']."</td>
	<td>".$res['age']."</td>";
	echo "</tr>";
}
?>
	
</table>


