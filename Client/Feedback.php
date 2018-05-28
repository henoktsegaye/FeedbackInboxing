<?php
print_r($_POST);
/**
 * 
 */
class InsertFeedback
{
	
	function __construct()
	{
		$this->add();
	}
	function add(){
		$name = $_POST['first_name'].' '.$_POST['last_name'];
		$disc = $_POST['description'];
		$type = $_POST['group1'];
		$datenow=
	$query = "INSERT INTO Feedback(id ,name, description, type, date) values('','$name' , '$desc' , '$type' , '$datenow')";
	require_once '../Admin/Database/Database.php';
	$DB = new Database;
	$connection = $DB.connect;
	$connection -> query($query);
	header("location: Acknowlade.php");
}
}
new InsertFeedback;


?>