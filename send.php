<?php
session_start();
require_once 'chatdb.php';


if (isset($_POST['name']) && isset($_POST['entmsg'])){
$name = $_POST['name'];
$entmsg = $_POST['entmsg'];
$data_missing = array();

	if (empty($name)){
		$datamissing[] = 'name';
	}
	else{
		$name = trim($name);
	}
	if (empty($entmsg)){
		$datamissing[] = 'message';
	}
	else{
		$entmsg = trim($entmsg);
	}
}


$que= "INSERT INTO chat(name, msg) VALUES('$name', '$entmsg')";

$result = $sql->query($que);

if(!$result){
	echo "connection fail".mysqli_connect_error()."";
}
// else{
// 	echo "Your data has been sent sent to the database";
// }
$sql->close();
header("location: index.php");
?>