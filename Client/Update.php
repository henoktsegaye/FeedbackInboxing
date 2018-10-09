<?php

/**
 * 
 */
include ('../dbcon.php');
class Update
{
	
	function __construct()
	{
		$this ->update();
	}
	function update(){
		$name = $_POST['name'];
		$disc = $_POST['description'];
		$type = $_POST['group1'];
		$id = $_POST['id'];
		$datenow=date('Y-m-d');
	$query = "UPDATE Feedback SET name = '$name', description ='$disc' , type = '$type', date = '$datenow' WHERE id ='$id' ";
	
	$DB = new dbConnection();
	$connection = $DB->dbConnect();
	$connection -> query($query);
	header("location: index.php");

}
}
new Update;

?>