<html>
<head>
<!--	===============================================================================================-->
 <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" type="text/css" href="materialize-1-dev/dist/css/materialize.min.css"

media="screen,projection"
	>
		<link rel="stylesheet" type="text/css" href="../Admin/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="../emoji/dist/css/emojione.min.css">
		<Link rel="stylesheet" type="text/css" href="Custom.css" >
	
<script type="text/javascript" src="materialize-1-dev/dist/js/materialize.min.js"></script> 

<?php 


echo "<div class='row'><div class='col s4 offset-s4 card' style='padding-bottom: 20px;'> <center> <h4 class='text-info'>Thank you for your comment </h4> </center>.";
	//header("location: acknowledgement.php");
echo "<button class='btn btn-default'> <a style='text-align:center;text-decoration:none ; color: white; float: left;' href='../Client/'>&nbsp;&nbsp;&nbsp; Back </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>";
echo "<button class='btn btn-default' style='float: right;'><a style='text-align:center;text-decoration:none;color: white; float: right;' href='Edit.php' > Edit </a> </button> </div></div>";

?>
<script>
var wait = 10000;
var waiting = setTimeout(() => {
  this.location.replace('http://localhost/FeedbackInboxing/Client');
}, wait);
</script>