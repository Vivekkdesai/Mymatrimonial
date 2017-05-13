<?php
include('connection.php');
session_start();	
	mysql_query("UPDATE register_candidate SET is_active=0 WHERE user_id = '".$_SESSION['userid']."' ");
	include("detest.php");
	echo'<script>alert("your account has been deactivated")</script>';
	echo'<script>window.location="loginuser.php"</script>';
    
?>
