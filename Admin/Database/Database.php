<?php
class Database {
	
		function __construct(){
		
$this->connection();
	}
	public $conn = null;
	function connection () {
		 $connect =new mysqli("localhost","root" , "", "FeedbackInboxing");
		 $this-> conn = $connect;
		
	}


}


?>