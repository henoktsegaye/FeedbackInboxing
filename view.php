<?php
/**
 * 
 */
include ('dbcon.php');
//include ('retrive.php');

$id=$_GET['id'];
// echo $id;
$query="SELECT * FROM feedback where id=$id";

$DB = new dbConnection();
	$connection = $DB->dbConnect();
	$connection -> query($query);

     $result=  $connection -> query($query);
     while ($row=mysqli_fetch_array($result)) 
     {        echo "<div style='border:black 1px solid;margin-left:30%;margin-right:30%;'>";
             echo "Type<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "
             .$row['type']."&nbsp;&nbsp;&nbsp;&nbsp;<br>";
             echo "Name<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "
             .$row['name']."&nbsp;&nbsp;&nbsp;&nbsp;<br>";
             echo "Date<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "
             .$row['dates']."&nbsp;&nbsp;&nbsp;&nbsp;<br>";
             echo "Description<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "
             .$row['description']."&nbsp;&nbsp;&nbsp;&nbsp;<br>";
             echo "</div>";
             echo "<a href='../feedbackinboxing/Client/'> Back </a>";

             
     }


/*
class viewFeedback extends Retrieve
{  function __construct()
	{
		# code...
	}
	public function showFeedback(){

		$feedbacks=$this->retFeedback();
		echo "<div>";
		foreach ($feedbacks as $key => $feed) {
			echo "<div>";
			echo "<li>".$feedback['type']."</li>";
			echo "<li>".$feedback['name']."</li>";
			//echo "<li>".$feedback['disc']."</li>";
			//echo "<a href='../id=$feedback['id']'>View</a>";
			echo "</div>";
			# code...
		}
        echo "</div>";
	}
	
}*/
?>