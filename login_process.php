<?php
session_start();
include('connection.php');
$as=addslashes(json_encode($_REQUEST['fullname']));
$as1=addslashes(json_encode($_REQUEST['faddress']));
$as2=addslashes(json_encode($_REQUEST['city']));
$as3=addslashes(json_encode($_REQUEST['fphone']));
$as4=addslashes(json_encode($_REQUEST['relation']));
if(isset($_REQUEST['next1']))
{
	$emailId=$_REQUEST['email'];
	$checkdata_email="SELECT email FROM register_candidate WHERE email='".$emailId."'";
	$query_row_check=mysql_query($checkdata_email);
	if(mysql_num_rows($query_row_check)>0)
	{
		echo '1';
	}
	else
	{
$s="insert into register_candidate(email,password,relation,annual,firstName,surname,mamasurname,gender,fathername,grandfathername,profiledate,age) values(
'".mysql_real_escape_string($_REQUEST['email'])."','".mysql_real_escape_string(md5($_REQUEST['password']))."','".mysql_real_escape_string($_REQUEST['profile'])."','".mysql_real_escape_string($_REQUEST['annual'])."','".mysql_real_escape_string($_REQUEST['fname'])."','".mysql_real_escape_string($_REQUEST['lname'])."','".mysql_real_escape_string($_REQUEST['mama'])."','".mysql_real_escape_string($_REQUEST['gender'])."','".mysql_real_escape_string($_REQUEST['father'])."','".mysql_real_escape_string($_REQUEST['grandfather'])."',CURRENT_TIMESTAMP,'".mysql_real_escape_string($_REQUEST['age'])."')";
		if(mysql_query($s));
		{
			$sq="select user_id from register_candidate where email='".$_REQUEST['email']."' ";
			$result=mysql_query($sq);
			$row = mysql_fetch_assoc($result);
			$_SESSION['userid']=$row['user_id'];
		}
		$sa22="insert into candidate_relation (user_id,relation,fullname,address,city,phone) values(
'".$_SESSION['userid']."','$as4','$as','$as1','$as2','$as3')";
mysql_query($sa22);

		include('test.php');//$sa32="update candidate_job_detail set annualincome='".$_REQUEST['annual']."' where user_id='".$_SESSION['userid']."'";
	}
}
if(isset($_REQUEST['next2']))
{
	$phone=$_REQUEST['phone'];
	$checkdata_email="SELECT phone FROM candidate_address WHERE phone='".$phone."'";
	$query_row_check=mysql_query($checkdata_email);
	//$query_row_check1=mysql_query($mob);
	if(mysql_num_rows($query_row_check)>0)
	{
	echo '1';
	}
	else{
$sa ="insert into candidate_address(user_id,address,city,state,country,phone,mobile,pincode) values(
'".$_SESSION['userid']."','".mysql_real_escape_string($_REQUEST['address'])."','".mysql_real_escape_string($_REQUEST['city'])."','".mysql_real_escape_string($_REQUEST['state'])."','".mysql_real_escape_string($_REQUEST['country'])."','".mysql_real_escape_string($_REQUEST['phone'])."','".mysql_real_escape_string($_REQUEST['mobile'])."','".mysql_real_escape_string($_REQUEST['pincode'])."')";
mysql_query($sa);
$s2="insert into candidate_bio(user_id,birthplace,birthdate,btime,weight,height) values(
'".mysql_real_escape_string($_SESSION['userid'])."','".mysql_real_escape_string($_REQUEST['bplace'])."','".mysql_real_escape_string($_REQUEST['datepicker'])."','".mysql_real_escape_string($_REQUEST['basic_example_2'])."','".mysql_real_escape_string($_REQUEST['weight'])."','".mysql_real_escape_string(addslashes($_REQUEST['height']))."')";
mysql_query($s2);
	}
}
if(isset($_REQUEST['next3']))
{
$sa31 ="update candidate_bio set user_id='".$_SESSION['userid']."', complexion='".mysql_real_escape_string($_REQUEST['comp'])."',bodytype='".mysql_real_escape_string($_REQUEST['bodytype'])."',bodygroup='".mysql_real_escape_string($_REQUEST['bloodgroup'])."',horscope = '".mysql_real_escape_string($_REQUEST['horoscope'])."',manglik ='".mysql_real_escape_string($_REQUEST['manglik'])."' where user_id ='".$_SESSION['userid']."'";
mysql_query($sa31);
 $sa32="update register_candidate set familysatus='".mysql_real_escape_string($_REQUEST['family'])."' where user_id='".$_SESSION['userid']."'";
mysql_query($sa32);
$sa4="insert into candidate_job_detail(user_id,education,educationdetail,desgination) values(
'".$_SESSION['userid']."','".mysql_real_escape_string($_REQUEST['edu'])."','".mysql_real_escape_string($_REQUEST['edudetails'])."','".mysql_real_escape_string($_REQUEST['occu'])."')";
mysql_query($sa4);
$sa5="insert into candidate_siblings(user_id,unmarriedsis,unmarriedbro,marriedsis,marriedbro) values(
'".$_SESSION['userid']."','".mysql_real_escape_string($_REQUEST['unmarriedsis'])."','".mysql_real_escape_string($_REQUEST['unmarried'])."','".mysql_real_escape_string($_REQUEST['marriedsis'])."','".mysql_real_escape_string($_REQUEST['married'])."')";
mysql_query($sa5);
}
if(isset($_REQUEST['next4']))
{
$sa32="update register_candidate set nativeplace ='".mysql_real_escape_string($_REQUEST['native'])."',hobbies='".mysql_real_escape_string($_REQUEST['hobbiess'])."',specialcase ='".mysql_real_escape_string($_REQUEST['specialcase'])."',maritalstatus='".mysql_real_escape_string($_REQUEST['status'])."',havechild ='".mysql_real_escape_string($_REQUEST['child'])."',comments='".mysql_real_escape_string($_REQUEST['info'])."' where user_id='".$_SESSION['userid']."'";
mysql_query($sa32);
}
if(isset($_REQUEST['next5']))
{
include('test.php');
$sa56="insert into mother_occupation(user_id,motheroccupation,mothercity,motherfirm,motherphone) values(
'".$_SESSION['userid']."','".mysql_real_escape_string($_REQUEST['occupation1'])."','".mysql_real_escape_string($_REQUEST['city1'])."','".mysql_real_escape_string($_REQUEST['firm1'])."','".mysql_real_escape_string($_REQUEST['phone1'])."')";
mysql_query($sa56);
$sa57="insert into father_occupation(user_id,fatheroccupation,fathercity,fatherfirm,fatherphone) values(
'".$_SESSION['userid']."','".mysql_real_escape_string($_REQUEST['occupation'])."','".mysql_real_escape_string($_REQUEST['city'])."','".mysql_real_escape_string($_REQUEST['firm'])."','".mysql_real_escape_string($_REQUEST['phone'])."')";
mysql_query($sa57);
include('test.php');
}
?>