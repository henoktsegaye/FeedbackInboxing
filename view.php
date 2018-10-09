
<html>
<head>
<!--	===============================================================================================-->
 <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" type="text/css" href="Client/materialize-1-dev/dist/css/materialize.min.css"

media="screen,projection"
	>
		<link rel="stylesheet" type="text/css" href="Admin/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="emoji/dist/css/emojione.min.css">
		<Link rel="stylesheet" type="text/css" href="Custom.css" >
	
	<style type="text/css">
  
.goup {
  font-size: 50px;
}
.title{
	padding: 5px;
	background: #62ded5;
	color: white;
}
.down{
	margin-top: 40px;
}
.cards {
  box-shadow: 0 0 30px rgba(0,0,0,.1) !important;
  border-radius: 1px;
}

</style>
<script type="text/javascript" src="Client/materialize-1-dev/dist/js/materialize.min.js"></script> 

<?php
session_start();


/**
 * 
 */
include ('dbcon.php');
//include ('retrive.php');
class ViewIndividualFeedback {

function __construct() {
  
  $id=$_GET['id'];
// echo $id;
$query="SELECT * FROM Feedback where id=$id";

$DB = new dbConnection();
	$connection = $DB->dbConnect();
	$connection -> query($query);

     $result=  $connection -> query($query);
     while ($row=mysqli_fetch_array($result)) 
     {        echo "<div class='row down' ><div class='col s4 offset-s4'>
<div class='z-depth-0 cards' style='padding: 20px;'>
 <div class='title'>";
             
             if($row['type'] === 'excellent')
             {
               echo '<i class="em em-clap goup"></i> ';
             }
             else if($row['type'] === 'very nice') {
               echo '<i class="em em-smiley goup"></i>';
             }
             else if($row['type'] === 'good') {
              echo '<i class="em em-relaxed em-3x goup"></i>';
             }
             else if($row['type'] === 'have no idea') {
               echo '<i class="em em-smirk goup"></i> ';
             }
             else if($row['type'] === 'not good') {
               echo '<i class="em em-confused goup"></i>';
             }
             else if($row['type'] === 'poor') {
               echo '<i class="em  em-unamused goup"></i>';
             }
             else if($row['type'] === 'disappointed') {
             echo '<i class="em em-weary" goup></i>';
             }
             else {
              echo "??";
             }
            echo "  ".$row['type']."  <a href='../FeedbackInboxing/Admin/index2.php' style='float: right; right: 0; color: white'> <i class='fa fa-arrow-circle-left'> </i> back </a>  </div>";
             echo "<b>Name </b><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "
             .$row['name']."&nbsp;&nbsp;&nbsp;&nbsp;<br>";
             echo "<b> Date </b><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "
             .$row['date']."&nbsp;&nbsp;&nbsp;&nbsp;<br>";
             echo "<b> Description </b><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "
             .$row['description']."&nbsp;&nbsp;&nbsp;&nbsp;<br>";
             echo "</div> </div> </div>";
           

             
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
}}
new ViewIndividualFeedback;
?>