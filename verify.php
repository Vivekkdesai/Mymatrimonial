<?php
error_reporting('0');
session_start();
include('connection.php');
$id = $_SESSION['userid'];
 $sql = "UPDATE register_candidate SET verify='1' WHERE user_id = '".$id."'";
if(mysql_query($sql)){
echo "done";
}
?>