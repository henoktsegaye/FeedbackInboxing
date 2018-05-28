<?php
session_start();

/**
 * 
 */
class LoginController
{
	
	function __construct()
	{
		echo "what the fuck is happening";
		require '../Database/Database.php';
		print_r($_POST);
		if($_POST === null){

		}
		else {
			echo "okay here1";
			$DB = new Database();
            echo "okay here 2";
            $connection = $DB->conn;
			$this-> validate($connection,$_POST['email'] , $_POST['password']);
		}
	}

	function validate($connection , $username , $password){
		$query = "SELECT * FROM Admin WHERE username = '$username'";
		if($connection->query($query) === true){
			echo "successful";
			$user = null;
          while ($rowF = $resultF->fetch_assoc()) {
             $user = $rowF['username'];
                      }
               if($user === null){
                    header("location: ../Homepage.php");
                 }       
		}
		else {
			 header("location: ../index.php?msg=Username+or+password+not+correct");
		}
		
	}
}

new LoginController();

?>