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
	<table border="1">
	<tr>
		<td>sno</td>
		<td>name</td>
		<td>std</td>
		<td>mark</td>
		<td>fees</td>
		<td>balance</td>
		<td>password</td>

	</tr>
	<?php 
     include_once("configprincipal.php");
     $sno=$_GET['sno'];
    $result=mysqli_query($x,"SELECT * FROM info WHERE sno='$sno'");
    while($res=mysqli_fetch_assoc($result))
    {
    	echo "<tr>";
    	echo "<td> ".$res['sno']."</td> ";
    	echo "<td> ".$res['name']."</td> ";
    	echo "<td> ".$res['std']."</td> ";
    	echo "<td> ".$res['mark']."</td> ";
    	echo "<td> ".$res['fees']."</td> ";
    	echo "<td> ".$res['bal']."</td> ";
    	echo "<td> ".$res['password']."</td> ";
    	echo "<td>
    	<button>
         <a href=\"edit.php?sno=$res[sno]\">edit</a>
    	</button>
       <a href=\"delete.php?sno=$res[sno]\" onclick=\"return confirm('are you sure you want to delete')\">delete</a>
    	</td>";
    	echo "</tr>";

    }
    ?>
    </table>
    <?php
require 'configprincipal.php';
$sno=$_GET['sno'];
$y="SELECT * FROM info WHERE sno=$sno";
$result=mysqli_query($x,$y);
          while($row=mysqli_fetch_array($result))
          {
            echo "<div class='container'>";
            echo '<tr class="row">
            <div class="col-md-2"><td>sno</td><br>
              <td>'.$row['sno'].'</td></div>
              <div class="col-md-2"><td>name</td><br>
              <td>'.$row['name'].'</td></div>
              <div class="col-md-2"><td>std</td><br>
              <td>'.$row['std'].'</td></div>
              <div class="col-md-2"><td>mark</td><br>
              <td>'.$row['mark'].'</td></div>
              <div class="col-md-2"><td>fees</td><br>
              <td>'.$row['fees'].'</td></div>
              <div class="col-md-2"><td>name</td><br>
               <td>'.$row['bal'].'</td></div></tr>';
              
               
            echo '<div class="row"> 
             
             <div class="col-md-6">
             <td>photo</td><br><td>
                 <img src="data:image/jpeg;base64,'.base64_encode($row['photo']).'"height="100%" width="100%">
              </td></div>
              <div class="col-md-6"><td>photo</td><br><td> 
                 <img src="data:image/jpeg;base64,'.base64_encode($row['marksheet']).'"height="100%" width="100%">
              </td> </div>
              </div>';
            echo "</div>";
          }?>

</body>
