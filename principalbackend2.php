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
     $std=$_GET['std'];
    $result=mysqli_query($x,"SELECT * FROM info WHERE std='$std'");
    while($res=mysqli_fetch_assoc($result))
    {
    	echo "<tr>";
    	echo "<td> ".$res['sno']."</td> ";
    	echo "<td> ".$res['name']."</td> ";
    	echo "<td> ".$res['std']."</td> ";
    	echo "<td> ".$res['mark']."</td> ";
    	echo "<td> ".$res['fees']."</td> ";
    	echo "<td> ".$res['bal']."</td> ";
    	echo "<td> ".$res['password']."</td>";
    	echo "</tr>";

    }
    ?>
    </table>
    <?php
require 'configprincipal.php';
$std=$_GET['std'];
$y="SELECT * FROM info WHERE std=$std";
$result=mysqli_query($x,$y);
          while($row=mysqli_fetch_array($result))
          {
            echo "<div class='container'>";
            echo '<div class="row" >
            <div class="col-md-2"style="background:pink;"><td>sno</td><br>
              <td>'.$row['sno'].'</td></div>
              <div class="col-md-2" style="background:green;"><td>name</td><br>
              <td>'.$row['name'].'</td></div>
              <div class="col-md-2" style="background:yellow;"><td>std</td><br>
              <td>'.$row['std'].'</td></div>
              <div class="col-md-2" style="background:orange;"><td>mark</td><br>
              <td>'.$row['mark'].'</td></div>
              <div class="col-md-2" style="background:violet;"><td>fees</td><br>
              <td>'.$row['fees'].'</td></div>
              <div class="col-md-2" style="background:blue;"><td>name</td><br>
               <td>'.$row['bal'].'</td></div></div>';
              
               
            echo '<div class="row"> 
             
             <div class="col-md-6" style="background:grey;">
             <td>photo</td><br><td>
                 <img src="data:image/jpeg;base64,'.base64_encode($row['photo']).'"height="100%" width="100%">
              </td></div>
              <div class="col-md-6" style="background:skyblue;"><td>photo</td><br><td> 
                 <img src="data:image/jpeg;base64,'.base64_encode($row['marksheet']).'"height="100%" width="100%">
              </td> </div>
              </div>';
            echo "</div>";
          }?>


</body>
</html>
