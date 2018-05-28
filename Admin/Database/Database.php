<?php
class Database {
	
		function __construct(){
		echo "database is here";
$this->connection();
	}
	public $conn = null;
	function connection () {
		 $connect =new mysqli("localhost","root" , "", "FeedbackInboxing");
		 $this-> conn = $connect;
		
	}


}


?>