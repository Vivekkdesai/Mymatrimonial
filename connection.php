<?php 
error_reporting(E_ALL ^ E_DEPRECATED);
error_reporting(0);
$con=mysql_connect("localhost","root","");
mysql_select_db("maheshwari",$con) or die(mysql_error());

$local_url='http://localhost/';
$project_path='matrimonial/';
$upload_dir='uploadpic/';
define('UPLOAD_PIC', $local_url.$project_path.$upload_dir);
?>