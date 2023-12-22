<table border="1">
<?php 
     include_once("configure staff.php");
    
     $result= mysqli_query($x,"SELECT * FROM info ");
     while ($res=mysqli_fetch_assoc($result))
       {
       	echo "<tr>";
       	echo "<td> ".$res['sno']."</td>
       	<td> ".$res['name']."</td>
       	<td> ".$res['std']."</td>
       	<td> ".$res['mark']."</td>
       	<td> ".$res['fees']."</td>
       	<td> ".$res['bal']."</td>";
       	echo "</tr>";
       }

?>
</table>
<table border="0">
  <a href="staff.html"><h1>Add circular</h1>
    <?php 
     include_once("configuration_staff.php");
    
     $result= mysqli_query($x,"SELECT * FROM info ");
     while ($res=mysqli_fetch_assoc($result))
       {
        echo "<tr>";
        echo "<td> ".$res['title']."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td> ".$res['rea']."</td>";
        echo "</tr>";
        
        
       }

?>

</table>