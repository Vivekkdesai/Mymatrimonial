<?php
session_start();
include('connection.php');
if(isset($_REQUEST['next1']))
{
$sa="update register_candidate set firstName='".mysql_real_escape_string($_REQUEST['fname'])."',surname= '".mysql_real_escape_string($_REQUEST['lname'])."',mamasurname= '".mysql_real_escape_string($_REQUEST['mama'])."',relation='".mysql_real_escape_string($_REQUEST['profile'])."',gender='".mysql_real_escape_string($_REQUEST['gender'])."',annual='".mysql_real_escape_string($_REQUEST['annual'])."',fathername='".mysql_real_escape_string($_REQUEST['father'])."', grandfathername='".mysql_real_escape_string($_REQUEST['grandfather'])."' where user_id='".$_SESSION['userid']."'";
mysql_query($sa);
echo $ins="insert into register_candidate values('".mysql_real_escape_string($_REQUEST['fname'])."','".mysql_real_escape_string($_REQUEST['lname'])."','".mysql_real_escape_string($_REQUEST['mama'])."','".mysql_real_escape_string($_REQUEST['profile'])."','".mysql_real_escape_string($_REQUEST['gender'])."','".mysql_real_escape_string($_REQUEST['annual'])."','".mysql_real_escape_string($_REQUEST['father'])."','".mysql_real_escape_string($_REQUEST['grandfather'])."')";
mysql_query($ins);
}
if(isset($_REQUEST['next2']))
{
	$sa2="update candidate_address set address='".mysql_real_escape_string($_REQUEST['address'])."',city= '".mysql_real_escape_string($_REQUEST['city'])."',state= '".mysql_real_escape_string($_REQUEST['state'])."',country='".mysql_real_escape_string($_REQUEST['country'])."',phone='".mysql_real_escape_string($_REQUEST['phone'])."',mobile='".mysql_real_escape_string($_REQUEST['mobile'])."',pincode='".mysql_real_escape_string($_REQUEST['pincode'])."' where user_id='".$_SESSION['userid']."'";
	mysql_query($sa2);
	
	echo $ins2="INSERT INTO `maheshwari`.`candidate_address` (`addressid`, `user_id`, `address`, `city`, `othercity`, `state`, `country`, `otherstate`, `phone`, `mobile`, `pincode`) VALUES('','".$_SESSION['userid']."','".mysql_real_escape_string($_REQUEST['address'])."','".mysql_real_escape_string($_REQUEST['city'])."','','".mysql_real_escape_string($_REQUEST['state'])."','".mysql_real_escape_string($_REQUEST['country'])."','','".mysql_real_escape_string($_REQUEST['phone'])."','".mysql_real_escape_string($_REQUEST['mobile'])."','".mysql_real_escape_string($_REQUEST['pincode'])."')";
	mysql_query($ins2);
	$sa3="update candidate_bio set birthplace='".mysql_real_escape_string($_REQUEST['bplace'])."',birthdate= '".mysql_real_escape_string($_REQUEST['datepicker'])."',btime= '".mysql_real_escape_string($_REQUEST['basic_example_2'])."',weight='".mysql_real_escape_string($_REQUEST['weight'])."',height='".mysql_real_escape_string($_REQUEST['height'])."' where user_id='".$_SESSION['userid']."'";
	mysql_query($sa3);
    echo $ins3="INSERT INTO candidate_bio VALUES(null,'".$_SESSION['userid']."','".mysql_real_escape_string($_REQUEST['bplace'])."','".mysql_real_escape_string($_REQUEST['datepicker'])."','".mysql_real_escape_string($_REQUEST['basic_example_2'])."','".mysql_real_escape_string($_REQUEST['weight'])."','".mysql_real_escape_string(addslashes($_REQUEST['height']))."','','','','','')";
	mysql_query($ins3);
}
if(isset($_REQUEST['next3']))
{
$sa31 ="update candidate_bio set complexion='".mysql_real_escape_string($_REQUEST['comp'])."',bodytype='".mysql_real_escape_string($_REQUEST['bodytype'])."',bodygroup='".mysql_real_escape_string($_REQUEST['bloodgroup'])."',horscope = '".mysql_real_escape_string($_REQUEST['horoscope'])."',manglik ='".mysql_real_escape_string($_REQUEST['manglik'])."' where user_id ='".$_SESSION['userid']."'";
mysql_query($sa31);
echo $ins4="insert into candidate_bio values('".mysql_real_escape_string($_REQUEST['comp'])."','".mysql_real_escape_string($_REQUEST['bodytype'])."','".mysql_real_escape_string($_REQUEST['bloodgroup'])."','".mysql_real_escape_string($_REQUEST['horoscope'])."','".mysql_real_escape_string($_REQUEST['manglik'])."')";
mysql_query($ins4);
 $sa32="update register_candidate set familysatus='".mysql_real_escape_string($_REQUEST['family'])."' where user_id='".$_SESSION['userid']."'";
mysql_query($sa32);
$ins5="insert into register_candidate values('".mysql_real_escape_string($_REQUEST['family'])."')";
mysql_query($ins5);
$sa33="update candidate_job_detail set education='".mysql_real_escape_string($_REQUEST['edu'])."',education='".mysql_real_escape_string($_REQUEST['edudetails'])."',desgination='".mysql_real_escape_string($_REQUEST['occu'])."' where user_id='".$_SESSION['userid']."'";
mysql_query($sa33);
echo $ins6="insert into candidate_job_detail values('','".$_SESSION['userid']."','".mysql_real_escape_string($_REQUEST['edu'])."','".mysql_real_escape_string($_REQUEST['edudetails'])."','','".mysql_real_escape_string($_REQUEST['occu'])."','','','')";
mysql_query($ins6);
$sa5="update candidate_siblings set unmarriedsis='".mysql_real_escape_string($_REQUEST['unmarriedsis'])."',unmarriedbro='".mysql_real_escape_string($_REQUEST['unmarried'])."',marriedsis='".mysql_real_escape_string($_REQUEST['marriedsis'])."', marriedbro='".mysql_real_escape_string($_REQUEST['married'])."',where user_id='".$_SESSION['userid']."'";
mysql_query($sa5);
echo $ins7="insert into candidate_siblings values('','".mysql_real_escape_string($_REQUEST['unmarriedsis'])."','".mysql_real_escape_string($_REQUEST['unmarried'])."','".mysql_real_escape_string($_REQUEST['marriedsis'])."','".mysql_real_escape_string($_REQUEST['married'])."','".$_SESSION['userid']."')";
mysql_query($ins7);
}
if(isset($_REQUEST['next4']))
{
$sa37="update register_candidate set nativeplace ='".mysql_real_escape_string($_REQUEST['native'])."',hobbies='".mysql_real_escape_string($_REQUEST['hobbiess'])."',specialcase ='".mysql_real_escape_string($_REQUEST['specialcase'])."',maritalstatus='".mysql_real_escape_string($_REQUEST['status'])."',havechild ='".mysql_real_escape_string($_REQUEST['child'])."',Comments='".mysql_real_escape_string($_REQUEST['info'])."' where user_id='".$_SESSION['userid']."'";
mysql_query($sa37);
echo $ins8="insert into register_candidate values('".mysql_real_escape_string($_REQUEST['native'])."','".mysql_real_escape_string($_REQUEST['hobbiess'])."','".mysql_real_escape_string($_REQUEST['specialcase'])."','".mysql_real_escape_string($_REQUEST['status'])."','".mysql_real_escape_string($_REQUEST['child'])."','".mysql_real_escape_string($_REQUEST['info'])."')";
mysql_query($ins8);
}
if(isset($_REQUEST['next5']))
{
$sa38="update father_occupation set fatheroccupation ='".mysql_real_escape_string($_REQUEST['occupation'])."',fathercity='".mysql_real_escape_string($_REQUEST['city'])."',fatherfirm ='".mysql_real_escape_string($_REQUEST['firm'])."',fatherphone='".mysql_real_escape_string($_REQUEST['phone'])."' where user_id='".$_SESSION['userid']."'";
mysql_query($sa38);
echo $ins9="insert into father_occupation values('','".$_SESSION['userid']."','".mysql_real_escape_string($_REQUEST['occupation'])."','".mysql_real_escape_string($_REQUEST['city'])."','".mysql_real_escape_string($_REQUEST['firm'])."','".mysql_real_escape_string($_REQUEST['phone'])."')";
mysql_query($ins9);
$sa58="update mother_occupation set motheroccupation ='".mysql_real_escape_string($_REQUEST['occupation1'])."',mothercity='".mysql_real_escape_string($_REQUEST['city1'])."',motherfirm ='".mysql_real_escape_string($_REQUEST['firm1'])."',motherphone='".mysql_real_escape_string($_REQUEST['phone1'])."' where user_id='".$_SESSION['userid']."'";
mysql_query($sa58);
echo $ins10="insert into mother_occupation values('','".$_SESSION['userid']."','".mysql_real_escape_string($_REQUEST['occupation1'])."','".mysql_real_escape_string($_REQUEST['city1'])."','".mysql_real_escape_string($_REQUEST['firm1'])."','".mysql_real_escape_string($_REQUEST['phone1'])."')";
mysql_query($ins10);
}
?>