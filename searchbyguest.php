<!DOCTYPE HTML>
<html>
<?php
//error_reporting('0');
session_start();
include('connection.php');
include('header1.php');
//include('session_check.php');
?>
<head>
<script>
function myFunction() {
    window.print();
}
</script>
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
$id1=$_REQUEST['id'];
$sel5="SELECT * from partner_preference WHERE  user_id=$id1";
$sel="SELECT * from register_candidate WHERE user_id=$id1";
$sel1="SELECT * from candidate_bio WHERE user_id=$id1";
$sel2="SELECT * from candidate_address WHERE user_id=$id1";
$sel3="SELECT * from candidate_job_detail WHERE user_id=$id1";
$sel4="SELECT * from candidate_siblings WHERE user_id=$id1";	
$s="SELECT * from father_occupation WHERE user_id=$id1";
$result=mysql_query($s);
$result5=mysql_query($sel5);
$s2="SELECT * from mother_occupation WHERE user_id=$id1";
$result1=mysql_query($s2);			
$res=mysql_query($sel);
$res4=mysql_query($sel4);
$res1=mysql_query($sel1);
$res2=mysql_query($sel2);
$res3=mysql_query($sel3);
$row_s5=mysql_fetch_assoc($result5);
$row_s3=mysql_fetch_assoc($res3);
$row_s2=mysql_fetch_assoc($res2);
$row_s=mysql_fetch_assoc($res);
$row_s1=mysql_fetch_assoc($res1);
$row_s4=mysql_fetch_assoc($res4);	

if(isset($_REQUEST['search']))
{
$sel5="SELECT * from partner_preference WHERE user_id ='".$_REQUEST['searchbyid']."'";
$sel="SELECT * from register_candidate WHERE user_id ='".$_REQUEST['searchbyid']."'";
$sel1="SELECT * from candidate_bio WHERE user_id ='".$_REQUEST['searchbyid']."'";
$sel2="SELECT * from candidate_address WHERE user_id ='".$_REQUEST['searchbyid']."'";
$sel3="SELECT * from candidate_job_detail WHERE user_id ='".$_REQUEST['searchbyid']."'";
$sel4="SELECT * from candidate_siblings WHERE user_id ='".$_REQUEST['searchbyid']."'";	
$s="SELECT * from father_occupation WHERE user_id='".$_REQUEST['searchbyid']."'";
$result=mysql_query($s);
$result5=mysql_query($sel5);
$s2="SELECT * from mother_occupation WHERE user_id='".$_REQUEST['searchbyid']."'";
$result1=mysql_query($s2);			
$res=mysql_query($sel);
$res4=mysql_query($sel4);
$res1=mysql_query($sel1);
$res2=mysql_query($sel2);
$res3=mysql_query($sel3);
$row_s5=mysql_fetch_assoc($result5);
$row_s3=mysql_fetch_assoc($res3);
$row_s2=mysql_fetch_assoc($res2);
$row_s=mysql_fetch_assoc($res);
$row_s1=mysql_fetch_assoc($res1);
$row_s4=mysql_fetch_assoc($res4);	
}
?>
<div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="index.html"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">View Profile</li>
     </ul>
     <div class="profile">
     <form id="welform" method="post">
   	        
				<div class="flexslider">
					 <ul class="slides">
						    <?php if($row_s['gender']=='male'){echo  '<img  height ="300px" width="250px" src="uploadpic/default.jpg"/>';}else{echo  '<img  height ="300px" width="250px" src="uploadpic/female.jpg"/>';}?>
					 </ul>                        	
				  </div>
                 
            </form>
   	 <div class="col-md-8 profile_left">
     <form >
   	 	<h2>Profile Id : <?php echo $row_s['user_id'];?></h2>
   	 	<div class="col_1">
        		<div class="col-sm-8 row_1">
				<table class="table_working_hours">
		        	<tbody>
                    			<tr class="opened_1">
									<td class="day_label">Name :</td>
									<td class="day_value"><?php echo $row_s['firstName']. ' '.$row_s['surname'];?></td>
                                     <td class="day_value"><button  onclick="myFunction()">print this profile</button>
</td>
								</tr>
							 <tr class="opened_1">
							<td class="day_label"> Height :</td>
							<td class="day_value"><?php echo $row_s1['height'];?></td>
						</tr>
					    <tr class="opened">
							<td class="day_label">Last Login :</td>
							<td class="day_value"><?php echo $row_s['last_modify'];?></td>
						</tr>
					    <tr class="opened">
							<td class="day_label">Religion :</td>
							<td class="day_value">Hindu</td>
						</tr>
					    <tr class="opened">
							<td class="day_label">Marital Status :</td>
							<td class="day_value"><?php echo $row_s['maritalstatus'];?></td>
						</tr>
					    <tr class="opened">
							<td class="day_label">address :</td>
							<td class="day_value"><?php echo $row_s2['address'];?></td>
						</tr>
					    <tr class="closed">
							<td class="day_label">Profile Created by :</td>
							<td class="day_value closed"><span><?php echo $row_s['relation'];?></span></td>
						</tr>
					    <tr class="closed">
							<td class="day_label">Education :</td>
							<td class="day_value closed"><span><?php echo $row_s3['education'];?></span></td>
						</tr>
                        <tr class="opened">
									<td class="day_label">Gender:</td>
									<td class="day_value closed"><span><?php echo $row_s['gender'];?></span></td>
								</tr>
                                
				    </tbody>
				</table>
				</div>
			<div class="clearfix"> </div>
		</div>
		<div class="col_4">

		    <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
			   <ul id="myTab" class="nav nav-tabs nav-tabs1" role="tablist">
				  <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">About Myself</a></li>
				  <li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Family Details</a></li>
			   </ul>
			   <div id="myTabContent" class="tab-content">
				  <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
				    <!--<div class="tab_box">
				    	<h1>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h1>
				    	<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor</p>
				    </div>-->
				    <div class="basic_1">
				    	<h3>Basics & Lifestyle</h3>
				    	<div class="col-md-6 basic_1-left">
				    	  <table class="table_working_hours">
				        	<tbody>
				        		<tr class="opened_1">
									<td class="day_label">Name :</td>
									<td class="day_value"><?php echo $row_s['firstName']. ' '.$row_s['surname'];?></td>
								</tr>
                                <tr class="opened_1">
									<td class="day_label">father Name :</td>
									<td class="day_value"><?php echo $row_s['fathername']. ' '.$row_s['surname'];?></td>
								</tr>
							    <tr class="opened_1">
									<td class="day_label">grand father name :</td>
									<td class="day_value"><?php echo $row_s['grandfathername']. ' '.$row_s['surname'];?></td>
								</tr>
							    
							    <tr class="opened">
									<td class="day_label">Marital Status :</td>
									<td class="day_value"><?php echo $row_s['maritalstatus'];?></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Body Type :</td>
									<td class="day_value"><?php echo $row_s1['bodytype'];?></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Gotra :</td>
									<td class="day_value"><?php echo $row_s['mamasurname'];?></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Height :</td>
									<td class="day_value"><?php echo $row_s1['height'];?></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Physical Status :</td>
									<td class="day_value closed"><span><?php echo $row_s['specialcase'];?></span></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Profile Created by :</td>
									<td class="day_value closed"><span><?php echo $row_s['relation'];?></span></td>
								</tr>
								<tr class="opened">
									<td class="day_label">Family status :</td>
									<td class="day_value closed"><span><?php echo $row_s['familysatus'];?></span></td>
								</tr>
						    </tbody>
				          </table>
				         </div>
				         <div class="col-md-6 basic_1-left">
				          <table class="table_working_hours">
				        	<tbody>
				        		<tr class="opened_1">
									<td class="day_label">Age :</td>
									<td class="day_value"><?php echo $row_s['age']; ?></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Mother Tongue :</td>
									<td class="day_value">Hindi</td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Complexion :</td>
									<td class="day_value"><?php echo $row_s1['complexion'];?></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Weight :</td>
									<td class="day_value"><?php echo $row_s1['weight'];?></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Blood Group :</td>
									<td class="day_value"><?php echo $row_s1['bodygroup'];?></td>
								</tr>
							    <tr class="closed">
									<td class="day_label">manglik :</td>
									<td class="day_value closed"><span><?php echo $row_s1['manglik'];?></span></td>
								</tr>
							     <tr class="closed">
									<td class="day_label">Hobbiess :</td>
									<td class="day_value closed"><span><?php echo $row_s['hobbies'];?></span></td>
								</tr>
                                <tr class="closed">
									<td class="day_label">Native place :</td>
									<td class="day_value closed"><span><?php echo $row_s['nativeplace'];?></span></td>
								</tr>
                                <tr class="closed">
									<td class="day_label">Children :</td>
									<td class="day_value closed"><span><?php echo $row_s['havechild'];?></span></td>
								</tr>
						    </tbody>
				        </table>
				        </div>
				        <div class="clearfix"> </div>
				    </div>
				    <div class="basic_1">
				    	<h3>Religious / Social & Astro Background</h3>
				    	<div class="col-md-6 basic_1-left">
				    	  <table class="table_working_hours">
				        	<tbody>
				        		<tr class="opened">
									<td class="day_label">Time of Birth :</td>
									<td class="day_value"><?php echo $row_s1['btime'];?></td>
									
								</tr>
								</tr>
				        		<tr class="opened">
									<td class="day_label">Caste :</td>
									<td class="day_value">Not Specified</td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Date of Birth :</td>
									<td class="day_value closed"><span><?php echo $row_s1['birthdate'];?></span></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Place of Birth :</td>
									<td class="day_value closed"><span><?php echo $row_s1['birthplace'];?></span></td>
								</tr>
							 </tbody>
				          </table>
				         </div>
				         <div class="col-md-6 basic_1-left">
				          <table class="table_working_hours">
				        	<tbody>
				        		<tr class="opened_1">
									<td class="day_label">Religion :</td>
									<td class="day_value">Hindu</td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Sub Caste :</td>
									<td class="day_value">Not Specified</td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Raasi :</td>
									<td class="day_value"><?php echo $row_s1['horscope'];?></td>
								</tr>
							</tbody>
				        </table>
				        </div>
				        <div class="clearfix"> </div>
				    </div>
				    <div class="basic_1 basic_2">
				    	<h3>Education & Career</h3>
				    	<div class="basic_1-left">
				    	  <table class="table_working_hours">
				        	<tbody>
				        		<tr class="opened">
									<td class="day_label">Education   :</td>
									<td class="day_value"><?php echo $row_s3['education'];?></td>
								</tr>
				        		<tr class="opened">
									<td class="day_label">Education Detail :</td>
									<td class="day_value"><?php echo $row_s3['educationdetail'];?></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Occupation Detail :</td>
									<td class="day_value closed"><span><?php echo $row_s3['desgination'];?></span></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Annual Income :</td>
									<td class="day_value closed"><span><?php echo $row_s3['annualincome'];?></span></td>
								</tr>
    							
                                
							 </tbody>
				          </table>
				         </div>
				         <div class="clearfix"> </div>
				    </div>
				  </div>
				  <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
				    <div class="basic_3">
				    	<h4>Family Details</h4>
				    	<div class="basic_1 basic_2">
				    	
				    	<div class="col-md-6 basic_1-left">
				    	  <table class="table_working_hours">
				        	<tbody>
                            <form>
                            <fieldset>
                            <legend class="btn_1 submit">FATHERS OCCUPATION</legend>
                            
				        		<?php												
			while($rows=mysql_fetch_array($result))
            { 
			 echo '<tr 
			 bgcolor=#999999>firmname: 
			 '.$rows['fatherfirm'].'
			</tr>';
			echo'<br/>';
			echo '<tr>occupation: 
			 '.$rows['fatheroccupation'].'
			</tr>';
			echo'<br/>';
			echo '<tr>city: 
			 '.$rows['fathercity'].'
			</tr>';
			echo'<br/>';
			echo '<tr>phone: 
			 '.$rows['fatherphone'].'
			</tr>';
			echo'<br/>';
			
			}
			?>				
            </fieldset>
            </form>
				        		
                            <form>
                            <fieldset>
                            <legend class="btn_1 submit">MOTHER'S OCCUPATION</legend>
                            
									<?php												
			while($rows=mysql_fetch_array($result1))
            { 
			 echo '<tr>firmname: 
			 '.$rows['motherfirm'].'
			</tr>';
			echo'<br/>';
			echo '<tr>occupation: 
			 '.$rows['motheroccupation'].'
			</tr>';
			echo'<br/>';
			echo '<tr>city: 
			 '.$rows['mothercity'].'
			</tr>';
			echo'<br/>';
			echo '<tr>phone: 
			 '.$rows['motherphone'].'
			</tr>';
			
			}
			?>
					</fieldset>
                    </form>
                    <form>
                    <fieldset>
                            <legend class="btn_1 submit">OTHER FAMILY DETAILS</legend>
         
							    <tr class="opened">
									<td class="day_label">No. of unmarried Brothers :</td>
									<td class="day_value closed"><span><?php echo $row_s4['unmarriedbro'];?></span></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">No. of unmarried Sisters :</td>
									<td class="day_value closed"><span><?php echo $row_s4['unmarriedsis'];?></span></td>
								</tr>
                                <tr class="opened">
									<td class="day_label">No. of married Brothers :</td>
									<td class="day_value closed"><span><?php echo $row_s4['marriedbro'];?></span></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">No. of married Sisters :</td>
									<td class="day_value closed"><span><?php echo $row_s4['marriedsis'];?></span></td>
								</tr>
                                </fieldset>
                                </form>
							 </tbody>
				          </table>
				         </div>
				       </div>
				    </div>
				</div>
</body>
</html>	
<?php include('include/footer.php');?> 