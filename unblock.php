<?php
include('connection.php');
session_start();
echo $id = $_REQUEST['id'];
echo $_SESSION['userid'];
	//mysql_query("UPDATE `maheshwari`.`register_candidate` SET blockid = $id WHERE user_id = '".$_SESSION['userid']."'");
	mysql_query("UPDATE `maheshwari`.`register_candidate` SET block = 0 WHERE user_id = $id ");
	header('location:home.php');
?>
