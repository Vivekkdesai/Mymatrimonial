<?php
session_start();
include('connection.php');

if(isset($_REQUEST['log1']))	
	{
 $s2="insert into partner_preference(user_id,age,btype,bgroup,weight,height,occu,comp,edu,city,country,state,manglik,marstatus,family,otherinfo) values(
'".$_SESSION['userid']."','".mysql_real_escape_string($_REQUEST['age'])."','".mysql_real_escape_string($_REQUEST['bodytype'])."','".mysql_real_escape_string($_REQUEST['bloodgroup'])."','".mysql_real_escape_string($_REQUEST['weight'])."','".mysql_real_escape_string(addslashes($_REQUEST['height']))."','".mysql_real_escape_string($_REQUEST['occu'])."','".mysql_real_escape_string($_REQUEST['comp'])."','".mysql_real_escape_string($_REQUEST['edu'])."','".mysql_real_escape_string(addslashes($_REQUEST['city']))."','".mysql_real_escape_string($_REQUEST['country'])."','".mysql_real_escape_string($_REQUEST['state'])."','".mysql_real_escape_string($_REQUEST['manglik'])."','".mysql_real_escape_string($_REQUEST['status'])."','".mysql_real_escape_string($_REQUEST['family'])."','".mysql_real_escape_string($_REQUEST['other'])."')";
		mysql_query($s2);
		echo"<script>
alert(' Partner Preference has been Recorded')
	</script>";

	echo'<script>window.location="home.php"</script>';
	
	}

?>