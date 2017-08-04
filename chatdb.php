<?php
session_start();

$sql= mysqli_connect($db_host, $db_username, $db_password, $dbname);

if (!$sql){
	die("unable to connect to mysqli".mysqli_error($sql));
}
?>
