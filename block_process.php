<?php
include('connection.php');
session_start();
 $id = $_REQUEST['id'];
 $_SESSION['userid'];
 $_SESSION['id']=$id ;
	mysql_query("insert  into  blocked (user_id,blockid)values('".$_SESSION['userid']."',$id)");
	mysql_query("UPDATE register_candidate SET block = 1 WHERE user_id = $id ");
	header('location:home.php');
?>
