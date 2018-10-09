
<?php

require_once '../Admin/Database/Database.php';
$mysqli = new Database();
$mysqli = $mysqli->conn;
$sql = "SELECT * FROM `Feedback` ORDER BY `id`  DESC";

$results = [];
if($mysqliResult = $mysqli->query($sql))
{
	while($Result = $mysqliResult->fetch_assoc())
	{
		$results[] = $Result;
		unset($Result);
	}
}
else {
	echo "some problem happened";
}

$someresult = json_encode($results);
echo $someresult;


  ?>