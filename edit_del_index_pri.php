<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<table>
	<tr>
		<td>sno</td>
		<td>name</td>
		<td>class</td>
		<td>mark</td>
		<td>fees</td>
		<td>balance</td>
	</tr>
	<?php
     include_once("configprincipal.php");
     $result=mysqli_query($x,"SELECT * FROM info ORDER BY sno DESC");
     while ($res=mysqli_fetch_assoc($result)) 
     {
     	echo "<tr>";
     	echo "<td> ".$res['sno']." </td>";
     	echo "<td> ".$res['name']." </td>";
     	echo "<td> ".$res['class']." </td>";
     	echo "<td> ".$res['mark']." </td>";
     	echo "<td> ".$res['fees']." </td>";
     	echo "<td> ".$res['bal']." </td>";
        echo "<td>
        <button>
          <a href=\"edit.php?sno=$res[sno]\">edit</a>
        </button>
        
        <a href= \"delete.php?sno=$res[sno]\" onclick=\"return confirm('Are you sure you want to delete')\" >delete</a> 
        </td>";

        echo "</tr>";
     

     	
     }     
	?>
</table>
</body>
</html>