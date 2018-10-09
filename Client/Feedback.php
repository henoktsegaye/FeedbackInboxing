<?php
/**
 * 
 */


class Feedback {
	function __construct(){
		include ('../dbcon.php');
	}

	public function save ($name, $disc , $datenow, $type){

		$query = "INSERT INTO Feedback(name, description, type, date) values('$name' , '$disc' , '$type' , '$datenow')";
	
		$DB = new dbConnection();
		$connection = $DB->dbConnect();
		$connection -> query($query);
		return true;
	}



public function edit(){ 
	$DB = new dbConnection();
 $connection = $DB->dbConnect();
$query1 = "SELECT MAX(id) AS LID FROM Feedback";

 $result1=  $connection -> query($query1);

while($row1 = mysqli_fetch_assoc($result1)){
   $LID = $row1['LID'];
}

$query="SELECT name , description,type, date ,id FROM Feedback  WHERE id = '$LID'";

 $result=  $connection -> query($query);
 return $result;
}



function update ($name, $disc, $type,$datenow, $id){
	//the one to update feedbak
	$query = "UPDATE Feedback SET name = '$name', description ='$disc' , type = '$type', date = '$datenow' WHERE id ='$id' ";
	echo $query;

	$DB = new dbConnection();
	$connection = $DB->dbConnect();
	$queryResult = $connection -> query($query);
	//exit();
if ($queryResult){
	return true;
}
else {
	return false;
}
}

}

?>