<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title></title>
</head>
<body>
     <h1>circular</h1>
<table border="0">
          <tr>
               <td>id</td>
               <td>title</td>
               <td>reason</td>
               </tr>
          
               <?php
                 include_once("configuration_staff.php");
                 $result=mysqli_query($x,"SELECT * FROM info ORDER BY id DESC");
                 while ($res=mysqli_fetch_assoc($result))
                 {
                    echo "<tr>";
         echo "<td> ".$res['id']."</td>";
        echo "<td> ".$res['title']."</td>";
        echo "<td> ".$res['rea']."</td>";
        echo "<td>
             <button>
             <a href=\"delete.php?id=$res[id]\" onclick=\"return confirm('are you sure you want to delete')\">delete</a></button>
        </td>";
        echo "</tr>";

                 }
               ?>
          
      </table>
</body>
</html>