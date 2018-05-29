<?php
include ('dbcon.php');
$query="SELECT * FROM feedback WHERE id=max(id)";

  $DB = new dbConnection();
  $connection = $DB->dbConnect();
  $result=  $connection -> query($query);
 while ($row=mysqli_fetch_array($result)) 
     { 
         
                           echo $row['id'];

             /*echo "<li class='collection-item'>"
             .$row['type']."&nbsp;&nbsp;&nbsp;&nbsp;". $row['name']."<a href=\"../view.php?id=".$row['id']."\" >&nbsp;&nbsp;&nbsp;&nbsp;Detail</a></li>";
//
*/     }

?>