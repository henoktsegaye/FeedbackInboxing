<?php
session_start();

/**
 * 
 */
class LoginController
{
	public $rowF ;
	
	function __construct()
	{
		$this-> rowF = null;
		require '../../dbcon.php';
		print_r($_POST);
		if($_POST === null){

		}
		else {
			echo "okay here1";
			$DB = new dbConnection();
	$connection = $DB->dbConnect();
            
			$this-> validate($connection,$_POST['username'] , $_POST['password']);
		}
	}

	function validate($connection , $username , $password){
		$query = "SELECT * FROM Admin WHERE username = '$username'";
		//echo $query;
		$queryr = $connection->query($query) ;

			echo "successful";
			
			$user = null;
          while ($rowF = mysqli_fetch_assoc($queryr)) {
             $user = $rowF['username'];
                      }
               if($user !== null){
				   
				   $_SESSION['admin'] ='admin';
				 
                    header("location: ../index2.php");
                 }       
		//}
                 echo "<h2> Usernaem and password incorrect </h2>";
		//else {

//echo "its totally false";			 //header("location: ../index.php?msg=Username+or+password+not+correct");
//		}
		
	}
}

new LoginController();

?>