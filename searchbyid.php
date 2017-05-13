<!DOCTYPE HTML>
<html>
<?php
error_reporting(0);
session_start();
include('connection.php');
include('include/header.php');
include('session_check.php');
?>
<head>
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<link href="bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="js/jssor.slider.mini.js"></script>
    <!-- use jssor.slider.debug.js instead for debug -->
    <script>
        jQuery(document).ready(function ($) {
            
            var jssor_1_SlideoTransitions = [
              [{b:5500,d:3000,o:-1,r:240,e:{r:2}}],
              [{b:-1,d:1,o:-1,c:{x:51.0,t:-51.0}},{b:0,d:1000,o:1,c:{x:-51.0,t:51.0},e:{o:7,c:{x:7,t:7}}}],
              [{b:-1,d:1,o:-1,sX:9,sY:9},{b:1000,d:1000,o:1,sX:-9,sY:-9,e:{sX:2,sY:2}}],
              [{b:-1,d:1,o:-1,r:-180,sX:9,sY:9},{b:2000,d:1000,o:1,r:180,sX:-9,sY:-9,e:{r:2,sX:2,sY:2}}],
              [{b:-1,d:1,o:-1},{b:3000,d:2000,y:180,o:1,e:{y:16}}],
              [{b:-1,d:1,o:-1,r:-150},{b:7500,d:1600,o:1,r:150,e:{r:3}}],
              [{b:10000,d:2000,x:-379,e:{x:7}}],
              [{b:10000,d:2000,x:-379,e:{x:7}}],
              [{b:-1,d:1,o:-1,r:288,sX:9,sY:9},{b:9100,d:900,x:-1400,y:-660,o:1,r:-288,sX:-9,sY:-9,e:{r:6}},{b:10000,d:1600,x:-200,o:-1,e:{x:16}}]
            ];
            
            var jssor_1_options = {
              $AutoPlay: true,
              $SlideDuration: 300,
              $SlideEasing: $Jease$.$OutQuint,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };
            
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1920);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>
    <style>
        
         /*jssor slider bullet navigator skin 05 css */
        
        /*.jssorb05 div           (normal)
        .jssorb05 div:hover     (normal mouseover)
        .jssorb05 .av           (active)
        .jssorb05 .av:hover     (active mouseover)
        .jssorb05 .dn           (mousedown)
        */
        .jssorb05 {
            position: absolute;
        }
        .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
            position: absolute;
            /* size of bullet elment */
            width: 16px;
            height: 16px;
            background: url('img/b05.png') no-repeat;
            overflow: hidden;
            cursor: pointer;
        }
        .jssorb05 div { background-position: -7px -7px; }
        .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
        .jssorb05 .av { background-position: -67px -7px; }
        .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }

        /* jssor slider arrow navigator skin 22 css */
        
        /*.jssora22l                  (normal)
        .jssora22r                  (normal)
        .jssora22l:hover            (normal mouseover)
        .jssora22r:hover            (normal mouseover)
        .jssora22l.jssora22ldn      (mousedown)
        .jssora22r.jssora22rdn      (mousedown)
*/        
        .jssora22l, .jssora22r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 400px;
            height: 90px;
            cursor: pointer;
            background: url('images/a17.png') center center no-repeat;
            overflow: hidden;
        }
        .jssora22l { background-position: -10px -31px; }
        .jssora22r { background-position: -70px -31px; }
        .jssora22l:hover { background-position: -130px -31px; }
        .jssora22r:hover { background-position: -190px -31px; }
        .jssora22l.jssora22ldn { background-position: -250px -31px; }
        .jssora22r.jssora22rdn { background-position: -310px -31px; }
    </style>
    <script>
function Comp() {
var answer=confirm("Are you sure ?");
if (answer==true)
  {
    return true;
  }
else
  {
    return false;
  }
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
$k="select * from ireceive where addedby='".$_SESSION['userid']."' and user_id='".$_REQUEST['searchbyid']."' ";
	$z=mysql_query($k);
	$accept=mysql_fetch_assoc($z);
$id1=$_REQUEST['id'];
	$n="select * from register_candidate where user_id='".$_REQUEST['searchbyid']."' or user_id='".$id1."' ";
	$m=mysql_query($n);
	$record=mysql_fetch_assoc($m);
if($record>0 && $record['block']==0)
{
$id1=$_REQUEST['id'];
$sel5="SELECT * from partner_preference WHERE user_id ='".$_REQUEST['searchbyid']."' or user_id='".$id1."'";
$sel="SELECT * from register_candidate WHERE user_id ='".$_REQUEST['searchbyid']."' or user_id='".$id1."'";
$sel1="SELECT * from candidate_bio WHERE user_id ='".$_REQUEST['searchbyid']."' or user_id='".$id1."'";
$sel2="SELECT * from candidate_address WHERE user_id ='".$_REQUEST['searchbyid']."' or user_id='".$id1."'";
$sel3="SELECT * from candidate_job_detail WHERE user_id ='".$_REQUEST['searchbyid']."' or user_id='".$id1."'";
$sel4="SELECT * from candidate_siblings WHERE user_id ='".$_REQUEST['searchbyid']."' or user_id='".$id1."'";	
$s="SELECT * from father_occupation WHERE user_id='".$_REQUEST['searchbyid']."' or user_id='".$id1."'";
$result=mysql_query($s);
$result5=mysql_query($sel5);
$s2="SELECT * from mother_occupation WHERE user_id='".$_REQUEST['searchbyid']."' or user_id='".$id1."'";
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
else
{
echo "<script>alert('sorry no such id exist') </script>";
echo "<script> window.location='home.php'</script>";
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
   	 <div class="col-md-8 profile_left">
     <form >
   	 	<h2>Profile Id : <?php echo $row_s['user_id'];?></h2>
   	 	<div class="col_3">
        <form >
   	        <div class="col-sm-4 row_2">
				<div class="flexslider">
					 <ul class="slides">
						<?php if($row_s['gender']=='male'){echo  '<img  height ="300px" width="250px" src="uploadpic/default.jpg"/>';}elseif($row_s['gender']=='female'){echo '<img  height ="300px" width="250px" src="uploadpic/female.jpg"/>';}elseif($accept['accept']=='1'){ echo '<img  height ="300px" width="250px" src="uploadpic/'.$row_s['photo'].'"/>';}?>	
					 </ul>
                                             	
				  </div>
                  </div>
            </form>
			<div class="col-sm-8 row_1">
				<table class="table_working_hours">
		        	<tbody>
                    			<tr class="opened_1">
									<td class="day_label">Name :</td>
									<td class="day_value"><?php echo $row_s['firstName']. ' '.$row_s['surname'];?></td>
                                    <td class="day_value"><a href="favprocess.php?id=<?php echo $_REQUEST['searchbyid'];?>" onClick="return Comp();">Add To Favourite</a></td>
                                    <td class="day_value"><a href="interprocess.php?id=<?php echo $_REQUEST['searchbyid'];?>" onClick="return Comp();">Send Interest</a></td>
									<td class="day_value"><a href="block_process.php?id=<?php echo $_REQUEST['searchbyid'];?>" onClick="return Comp();">Block</a></td>
								    
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
							<td class="day_value"><?php if($accept['accept']==1){ echo $row_s2['address'];}else{ echo"please send request to user"; }?></td>
						</tr>
					    <tr class="closed">
							<td class="day_label">Profile Created by :</td>
							<td class="day_value closed"><span><?php echo $row_s['relation'];?></span></td>
						</tr>
					    <tr class="closed">
							<td class="day_label">Education :</td>
							<td class="day_value closed"><span><?php echo $row_s3['education'];?></span></td>
						</tr>
                        <tr class="closed">
							<td class="day_label">Gender :</td>
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
				  <li role="presentation"><a href="#profile1" role="tab" id="profile-tab1" data-toggle="tab" aria-controls="profile1">Partner Preference</a></li>
                  <li role="presentation"><a href="#profile2" role="tab" id="profile-tab2" data-toggle="tab" aria-controls="profile2">album</a></li>
                 
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
									<td class="day_label">Email :</td>
									<td class="day_value closed"><span><?php if($accept['accept']==1){ echo $row_s['email'];}else{ echo"please send request to user"; }?></span></td>
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
									<td class="day_value">28 Yrs</td>
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
									<td class="day_label">Mobile :</td>
									<td class="day_value closed"><span><?php if($accept['accept']=='1'){ echo $row_s2['mobile'];} else{ echo"please send request to user"; }?></span></td>
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
									<td class="day_label">Education:</td>
									<td class="day_value"><?php echo $row_s3['education'];?></td>
								</tr>
				        		<tr class="opened">
									<td class="day_label">Education Detail:</td>
									<td class="day_value"><?php echo $row_s3['educationdetail'];?></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Occupation Detail:</td>
									<td class="day_value closed"><span><?php echo $row_s3['desgination'];?></span></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Annual Income:</td>
									<td class="day_value closed"><span><?php echo $row_s['annual'];?></span></td>
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
				 <div role="tabpanel" class="tab-pane fade" id="profile1" aria-labelledby="profile-tab1">
				    <div class="basic_1 basic_2">
				       <div class="basic_1-left">
<table class="table_working_hours"  >
		        	<tbody>
		        		<tr class="opened_1">
									<td class="day_label">Age :</td>
									<td class="day_value"><?php echo $row_s5['age'];?></td>
								</tr>
                                <tr class="opened">
									<td class="day_label">education :</td>
									<td class="day_value"><?php echo $row_s5['edu'];?></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">occupation :</td>
									<td class="day_value"><?php echo $row_s5['occu'];?></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">status of family :</td>
									<td class="day_value"><?php echo $row_s5['family'];?></td>
								</tr>
                                <tr class="opened">
									<td class="day_label">body type :</td>
									<td class="day_value"><?php echo $row_s5['btype'];?></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Marital status :</td>
									<td class="day_value"><?php echo $row_s5['marstatus'];?></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Complexion :</td>
									<td class="day_value"><?php echo $row_s5['comp'];?></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Weight :</td>
									<td class="day_value"><?php echo $row_s5['weight'];?></td>
								</tr>
							    <tr class="opened">
									<td class="day_label">Blood Group :</td>
									<td class="day_value"><?php echo $row_s5['bgroup'];?></td>
								</tr>
							    <tr class="closed">
									<td class="day_label">manglik :</td>
									<td class="day_value closed"><span><?php echo $row_s5['manglik'];?></span></td>
								</tr>
							    <tr class="closed">
									<td class="day_label">city :</td>
									<td class="day_value closed"><span><?php echo $row_s5['city'];?></span></td>
								</tr>
                                 <tr class="closed">
									<td class="day_label">state :</td>
									<td class="day_value closed"><span><?php echo $row_s5['state'];?></span></td>
								</tr>
                                <tr class="closed">
									<td class="day_label">country :</td>
									<td class="day_value closed"><span><?php echo $row_s5['country'];?></span></td>
								</tr>
                                <tr class="closed">
									<td class="day_label">height :</td>
									<td class="day_value closed"><span><?php echo $row_s5['height'];?></span></td>
								</tr>
                                <tr class="closed">
									<td class="day_label">other preferrence :</td>
									<td class="day_value closed"><span><?php echo $row_s5['otherinfo'];?></span></td>
								</tr>
                            </tbody>
                            </table>				
			 </div>
				     </div>
				 </div>
     <div role="tabpanel" class="tab-pane fade" id="profile2" aria-labelledby="profile-tab">
				    <div class="basic_3">
				    	<h4>ALBUM</h4>
                        	
<div class="basic_1 basic_2">
<div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden; visibility: hidden;">
  <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden;">
<?php
 $s=mysql_query("select * from upload_data where user_id='".$_REQUEST['searchbyid']."' ");
  while($r=mysql_fetch_assoc($s))
{?>
		<div data-p='225.00'  style='display: none;'>
        <!--<div class="product-at"><div class="pro-grid">--><img data-u='image' src="user_data/<?php echo $r['FILE_NAME'];?>"/><!--<span><a href="uploadpic.php">EDIT</a>
        </span>
        </div>
        </div>-->         
            </div> 
            <?php
			}
			?>
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:16px;height:16px;"></div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora22l" style="top:0px;left:12px;width:40px;height:58px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora22r" style="top:0px;right:12px;width:40px;height:58px;" data-autocenter="2"></span>
        <a href="http://www.jssor.com" style="display:none">Slideshow Maker</a>
    </div>
    
<!--<table class="table_working_hours"  >
		        	<tbody>
                    			</tr>
</tbody>
</table>-->                                             
</div>
				     </div>
				 </div>
		     </div>
		  </div>
          </div>
          </div>
          </div>
          </div>
          </div>
      <div> <?php include('include/footer.php');?></div>       
</body>
</html>	

