<?php
/**
 * 
 */
include ('dbcon.php');

class Retrieve extends dbConnection
{
	public function retFeedback(){
		$sql="SELECT * FROM feedback";
		$resutlt=$this->dbCon()->query($sql);
		$numRows=$result->num_rows;
		if($numRows>0){
			while($row==$result->fetch_assoc()){
				//$feedback[]=$row;
				echo "<div>";
			echo "<li>".$row['type']."</li>";
			echo "<li>".$row['name']."</li>";
			//echo "<li>".$feedback['disc']."</li>";
			//echo "<a href='../id=$feedback['id']'>View</a>";
			echo "</div>";
			}
			
			//return $feedback;
		}
	}
	
	
}
?>