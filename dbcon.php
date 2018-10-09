<?php
class dbConnection{
private $serverName;
private $password;
private $userName;
private $dbName;
public function dbConnect(){
   $this->serverName="localhost";
   $this->userName="root";
   $this->password="";
   $this->dbName="FeedbackInboxing";
   $dbCon=new mysqli($this->serverName,$this->userName,$this->password,$this->dbName);

	return $dbCon;
}
}
?>