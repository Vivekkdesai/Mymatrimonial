<!DOCTYPE HTML>
<html>
<head>
<?php
error_reporting('0');
include('connection.php');
include('header1.php');
if(isset($_REQUEST['search']))
{
$sel="SELECT * from register_candidate WHERE (gender ='".$_REQUEST['gender']."' or maritalstatus ='".$_REQUEST['status']."') or (age between '".$_REQUEST['minage']."' and '".$_REQUEST['maxage']."')";
  $sel1="SELECT * from candidate_bio WHERE (height between '".addslashes($_REQUEST['minheight'])."' and '".addslashes($_REQUEST['maxheight'])."') or manglik ='".$_REQUEST['check']."'";
 $sel2="SELECT * from candidate_address WHERE city ='".$_REQUEST['city']."' or state ='".$_REQUEST['state']."' or country ='".$_REQUEST['country']."'";
 $sel3="SELECT * from candidate_job_detail WHERE education ='".$_REQUEST['edu']."'";				
$res=mysql_query($sel);
$res1=mysql_query($sel1);
$res2=mysql_query($sel2);
$res3=mysql_query($sel3);
while($row2=mysql_fetch_assoc($res))
{
	//$a[]=$row2;
	$a[]=$row2['user_id'];
}
  
while($row2=mysql_fetch_assoc($res1))
{
	//$a[]=$row2;
	$a[]=$row2['user_id'];
}
while($row2=mysql_fetch_assoc($res2))
{
	//$a[]=$row2;
	$a[]=$row2['user_id'];
}
while($row2=mysql_fetch_assoc($res3))
{
	//$a[]=$row2;
	$a[]=$row2['user_id'];
}
$b = array_unique($a);
//echo '<pre>'; print_r($b);
$str_search = "";
foreach($b as $val)
{
	$str_search.='a.user_id='.$val.' OR ';	
}
if($str_search)
{
	 $str_search;
	//echo '<br>';
	$str_search='('.substr($str_search, 0, -4).')';
}
//echo $str_search ; 
$s="SELECT a.user_id,a.fathername,a.firstName,a.age,a.gender,a.last_modify,a.mamasurname, b.city,c.height,j.desgination,j.education FROM `register_candidate` as a left join candidate_address as b on a.user_id=b.user_id left join candidate_bio as c on a.user_id=c.user_id left join candidate_job_detail as j on a.user_id=j.user_id where $str_search";
$resul=mysql_query($s);
}
?>
<head>
<script src="jquery/external/jquery/jquery.js"></script>
<script src="img/js/jquery.min.js"></script>
<script src="jquery/jquery-ui.js"></script>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,600,700,800,300' rel='stylesheet' type='text/css'>
        <link href="demo.css" rel="stylesheet">
        <link href="style.css" rel="stylesheet">
        <link href="dist/css/introLoader.css" rel="stylesheet">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
		<script src="dist/helpers/jquery.easing.1.3.js"></script>
        <script src="dist/helpers/spin.min.js"></script>
        <script src="dist/jquery.introLoader.js"></script>
</head>
<body>
<?php 
   while($rrow=mysql_fetch_assoc($resul))
   {?>
   <div class="col-md-6 col-md-rows">
   <div class="profile">
   	 <div class="col-md-12 profile_left">
     <form id="welform" method="post">
   	 	<h2>Profile Id :<?php echo'<a href="searchbyguest.php?id='.$rrow['user_id'].'">'.$rrow['user_id'].'</a>';?>
   	 	<div class="col_3">
        <form id="welform" method="post">
   	        <div class="col-sm-6 row_2 ">
				<div class="flexslider">
					 <ul class="slides">
						    <?php if($rrow['gender']=='male'){echo  '<img  height ="300px" width="250px" src="uploadpic/default.jpg"/>';}else{echo  '<img  height ="300px" width="250px" src="uploadpic/female.jpg"/>';}?>
					 </ul>                        	
				  </div>
                  </div>
            </form>
			<div class="col-sm-6">
<table class="table_working_hours">
		        	<tbody>
                    			<tr class="opened_1">
									<td class="day_label">Name :</td>
                                    <td class="day_label"><?php echo $rrow['firstName'];?> </td>
								</tr>
		        		<tr class="opened_1">
							<td class="day_label"> Height :</td>
							<td class="day_label"><?php echo $rrow['height'];?> </td>
						</tr>
					    <tr class="opened">
							<td class="day_label">Last Login :</td>
							<td class="day_label"><span><?php echo $rrow['last_modify'];?></span> </td>
						</tr>
					    <tr class="opened">
							<td class="day_label">age :</tds>
							<td class="day_label"><?php echo $rrow['age'];?> </td>
						</tr>
					    <tr class="opened">
							<td class="day_label">father name :</td>
							<td class="day_label" width="60%"><?php echo $rrow['fathername'];?> </td>
						</tr>
					    <tr class="opened">
							<td class="day_label">gotra :</td>
							<td class="day_label"><?php echo $rrow['mamasurname'];?> </td>
						</tr>
					    <tr class="closed">
							<td class="day_label">Profession :</td>
							<td class="day_label"><?php echo $rrow['desgination'];?> </td>
						</tr>
					    <tr class="closed">
							<td class="day_label">Education :</td>
                            <td class="day_label"><?php echo $rrow['education'];?> </td>
						</tr>
                        <tr class="closed">
							<td class="day_label">city :</td>
                            <td class="day_label"><?php echo $rrow['city'];?> </td>
						</tr>
                        <tr class="closed">
							<td class="day_label">gender :</td>
                            <td class="day_label"><?php echo $rrow['gender'];?> </td>
						</tr>
				    </tbody>
				</table> 
	</div>
     </div>
     </form>
     </div>
     </div>
     </div>
     <?php	
	 }
   ?>
</body>
</html>