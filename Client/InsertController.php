<?php
/**
 * 
 */


class InsertFeedbackController 
{
	
	function __construct()
	{
		require_once 'Feedback.php';
		$this->add();
	}
	function add(){
		$name = $_POST['first_name']." ".$_POST['last_name'];
		$disc = $_POST['description'];
		$type = $_POST['group1'];
		$datenow=date('Y-m-d');
		
$fb = new Feedback;
if($fb->save($name, $disc,$datenow, $type)){
	header("location: acknowledgement.php");
} else {
	echo "can't be determined ";
}
	

}
}
new InsertFeedbackController;

?>