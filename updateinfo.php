<?php
session_start(); 
include('header2.php'); 
include('connection.php');
include('session_check.php');
$sel="SELECT * from register_candidate WHERE user_id ='".$_SESSION['userid']."'";
$sel1="SELECT * from candidate_bio WHERE user_id ='".$_SESSION['userid']."'";
$sel2="SELECT * from candidate_address WHERE user_id ='".$_SESSION['userid']."'";
$sel3="SELECT * from candidate_job_detail WHERE user_id ='".$_SESSION['userid']."'";
$sel4="SELECT * from candidate_siblings WHERE user_id ='".$_SESSION['userid']."'";	
$s="SELECT * from father_occupation WHERE user_id='".$_SESSION['userid']."'";
$result=mysql_query($s);
$s2="SELECT * from mother_occupation WHERE user_id='".$_SESSION['userid']."'";
$result1=mysql_query($s2);			
$res=mysql_query($sel);
$res4=mysql_query($sel4);
$res1=mysql_query($sel1);
$res2=mysql_query($sel2);
$res3=mysql_query($sel3);
$row_s3=mysql_fetch_assoc($res3);
$row_s2=mysql_fetch_assoc($res2);
$row_s=mysql_fetch_assoc($res);
$row_s1=mysql_fetch_assoc($res1);
$row_s4=mysql_fetch_assoc($res4);
$row_s5=mysql_fetch_assoc($result);
$row_s6=mysql_fetch_assoc($result1);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<script src="http://lab.iamrohit.in/js/location.js"></script>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<link rel="stylesheet" href="time.css" />    
<script src="jquery/external/jquery/jquery.js"></script>
<script src="jquery/jquery.validate.js"></script>
<script src="jquery/jquery-ui.js"></script>
<script src="time.js"></script>
<script src="slider.js"></script>
<script>

$(document).ready(function(){
	$("input").focus(function(){
    $(this).css("background-color", "#cccccc");
    });
    $("input").blur(function(){
    $(this).css("background-color", "#ffffff");
    });	
	
	
	$('#basic_example_2').timepicker();

	$("#form1").validate({
		
	rules: {
	annual:"required",
	profile: "required",
	father: "required",
	grandfather: "required",
	gender: "required",
				fname: "required",
				lname: "required",
				
		
	},
	messages: {
		
		profile: "please select profile",
		annual:"please select one",
		fname: "please fill your name",
		lname: "please fill your surname",
		father: "please fill father name",
		grandfather: "please fill grandfather name",
		gender: "please choose gender",
						
	},
	submitHandler: function(form) {	 
		
		var Datastring = $('#form1').serialize();  
		$.ajax({
			url: 'update_process.php ',
			type: 'post',
			data: Datastring,
			success: function(msg) {
				if(msg =='1')
				{
				//window.location = "loginuser.php";
				}
			}
		}); 
		$("#form1").hide(); 
		$("#form2").show();
	}
	});
	
	$("#form2").validate({
		
	rules: {

	bplace: "required",
	datepicker: "required",
	basic_example_2: "required",
	height: "required",
	weight: "required",
	address: "required",
	country: "required",
	city: "required",
	state: "required",
	
		
	},
	messages: {
	bplace: "please fill birth place",
	datepicker: "please select date",
	basic_example_2: "please enter time",
	height: "please select height",
	weight: "please select weight",
	address: "please fill address",
	country: "please select country",
	city: "please select city ",
	state: "please select state",
	
						
	},
	submitHandler: function(form) {	 
		
		var Datastring = $('#form2').serialize();  
		$.ajax({
			url: 'update_process.php',
			type: 'post',
			data: Datastring,
			success: function(msg) {
				if(msg =='1')
				{
				//window.location = "login.php";
				}
			}
		}); 
		$("#form2").hide(); 
			$("#form3").show();
	}
	});
	
	$("#form3").validate({
		
	rules: {

	horoscope: "required",
	manglik: "required",
	edu: "required",
	edudetails: "required",
	occu: "required",
	family: "required",
	unmarried: "required",
	married: "required",
	unmarriedsis: "required",
	marriedsis: "required",
		
	},
	messages: {
	
	horoscope: "please select horoscope",
	manglik: "please select manglik",
	edu: "please select education",
	edudetails: "please fill education details",
	occu: "please select occupation",
	family: "please select family",
	unmarried: "please select unmarried brothers",
	married: "please select married brothers",
	unmarriedsis: "please select unmarried sisters",
	marriedsis: "please select married sisters",
	
						
	},
	submitHandler: function(form) {	 
		
		var Datastring = $('#form3').serialize();  
		$.ajax({
			url: 'update_process.php',
			type: 'post',
			data: Datastring,
			success: function(msg) {
				if(msg =='1')
				{
				//window.location = "login.php";
				}
			}
		}); 
		$("#form3").hide(); 
			$("#form4").show();
	}
	});
	$("#form4").validate({
		
	rules: {

	native: "required",
	hobbiess: "required",
	specialcase: "required",
	status: "required",
	child: "required",
	info: "required",
	},
	messages: {
	native: "please fill native town",
	hobbiess: "please fill hobbiess",
	specialcase: "please select special case",
	status:"please select marital status",
	child: "please select child",
	info: "please some info about yourself",
						
	},
	submitHandler: function(form) {	 
		
		var Datastring = $('#form4').serialize();  
		$.ajax({
			url: 'update_process.php',
			type: 'post',
			data: Datastring,
			success: function(msg) {
				if(msg =='1')
				{
				//window.location = "login.php";
				}
			}
		}); 
		$("#form4").hide(); 
		$("#form5").show();
	}
	});
	
$("#form5").validate({
	
rules: {
       firm: "required",
	   occupation: "required",
	   city: "required",
       phone: "required",
	   firm1: "required",
	   occupation1: "required",
	   city1: "required",
       phone1: "required",
       },
messages: {
        firm: "Please enter your firm",
		occupation: "Please enter your occupation",
        city: "Please enter your city-name",
        phone: "Please enter your phonenumber",		
         firm1: "Please enter your firm",
		occupation1: "Please enter your occupation",
        city1: "Please enter your city-name",
        phone1: "Please enter your phonenumber",	
		 },
		 submitHandler: function (form) {
		 var Datastring = $('#form5').serialize();
		 $.ajax({
					url: 'update_process.php',
					type: 'post',
					data: Datastring,
					success: function(msg) {
						
						
						if(msg=='1')
						{
					
					
						}					
						}
					
					
					}); 
		alert("your information are updated ");	
			window.location="home.php";
			}
			});
				
	});
</script>
<body>
<div class="grid_3" >
  <div class="container" >
   <div class="breadcrumb1" >
     <ul>
        <a href="other/Backup/index.html"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">Register</li>
     </ul>
     <form id="form1" method="post"  action="#">
      
   <div class="candidate_info"   >
   	  <div class="col-sm-6 login_left" >
			 <div class='form-group'>
		      <label for='profile'>Biodata Filled By:<span>*</span></label>
		      <select name='profile' size="1"  class='form-text'  value='profile'>
              <option   value="<?php echo $row_s['relation'] ?>" ><?php echo $row_s['relation'] ?></option>
			  <?php
			$s="select MName from master where MType='1' ";
			$result=mysql_query($s);
 			
			while($rows=mysql_fetch_array($result))
            { 
				echo '<option value="'.$rows['MName'].'">'.$rows['MName'].'</option>';
            }
			?>  
			</select>
		    </div>
            <div class='form-group'>
		      <label for='annual'>Annual Income:<span>*</span></label>
		      <select name='annual' size="1"  class='form-text' >
              <option  value="<?php echo $row_s['annual'] ?>"  ><?php echo $row_s['annual'] ?></option>
			  <?php
			$s="select MName from master where MType='8' ";
			$result=mysql_query($s);
			while($rows=mysql_fetch_array($result))
            { 
			echo '<option value="'.$rows['MName'].'">'.$rows['MName'].'</option>';
            }
			?>  
			</select>
            </div>

			 <div class="form-group">
		      <label for="fname">First Name<span>*</span></label>
		      <input type="text" id="fname" name="fname"  value="<?php echo $row_s['firstName'] ?>" size="2" class="form-text" placeholder="First Name">
		    </div>
		    <div class="form-group">
		      <label for="lname">Surname<span       >*</span></label>
		      <input type="text" id="lname" name="lname" value="<?php echo $row_s['surname'] ?>" size="2" maxlength="60" class="form-text   " placeholder="Surname">
		    </div>
		    
           <div class="form-group">
		      <label for="mama">Mama's Surname(Gotra)<span>*</span></label>
		      <input type="text" id="mama" name="mama" value="<?php echo $row_s['mamasurname'] ?>"  size="2" maxlength="60" class="form-text   " placeholder="Gotra">
		    </div>
		    <div class="form-group">
		      <label for="gender">Gender</label><br />
              
		      <input type="radio" id="gender" name="gender" value="male" size="2">Male         
     <input type="radio" id="gender" name="gender" value="female" size="2" checked="<?php if($row_s['gender']=='female'){ echo 'checked';}?>" >Female
		    </div>
		    <div class="form-group">
		      <label for="father">Father's Name<span>*</span></label>
		      <input type="text" id="father" name="father"  size="2" maxlength="60"value="<?php echo $row_s['fathername']; ?>" class="form-text   " placeholder="Father's Name">
		    </div>
            <div class="form-group">
		      <label for="grandfather">Grandfather's Name<span       >*</span></label>
		      <input type="text" id="grandfather" name="grandfather"  size="2" maxlength="60" value="<?php echo $row_s['grandfathername']; ?>" class="form-text" placeholder="GrandFather's Name">
		    <input type="submit" id="next1" name="next1" value="NEXT" class="btn_1 submit">
            </div>
            </div>
            </div>
            </form>
<!--start of second form-->
<form id="form2" method="post" action="#" style="display:none">

<div class="candidate3_info"  >
<div class="col-sm-6 login_left" >
 <div class="age_select" id="12">
		      <label for="bplace">Birth Place <span >*</span></label>
		      <input type="text" id="bplace" name="bplace" value="<?php echo $row_s1['birthplace']; ?>"    size="2" maxlength="60" class="form-text" placeholder="Birth Place">
		    </div>
		    
 <div class="age_select" id="12">
		      <label for="dob">Date Of Birth  <span>*</span></label>
		        <input type="text" id="datepicker1" name="datepicker" value="<?php echo $row_s1['birthdate']; ?>" size="2" maxlength="60" class="form-text" placeholder="Birth Place">
            </div>
            
            
            <div class="age_select" id="12">
		      <label for="timepicker">Time Of Birth  <span>*</span></label>
		         
                <input type="text" id="basic_example_2" value="<?php echo $row_s1['btime']; ?>"      name="basic_example_2" class="form-text"  placeholder="Birth time">
            </div>
            
            
 
            <div class="form-group">
		      <label for="height">Height <span>*</span></label>
		                          <select name="height" id="height"  class="form-text   ">
		<option  value="<?php echo $row_s1['height'] ?>"  ><?php echo $row_s1['height']; ?></option>
		
			  <?php
			$s="select MName from master where MType='4' ";
			$result=mysql_query($s);
 			
			while($rows=mysql_fetch_array($result))
            { 
			echo '<option value="'.$rows['MName'].'">'.$rows['MName'].'</option>';
            }
			?>  
			
	</select>
    </div>
    
    <div class="form-group" id="15">
		      <label for="weight">Weight <span >*</span></label>
		        
                  <select name="weight"  class="form-text" id="weight">
	                 <option <?php echo $row_s1['weight']; ?>   ><?php echo $row_s1['weight']; ?></option>   
					 <?php
			$s="select MName from master where MType='11' ";
			$result=mysql_query($s);
 			
			while($rows=mysql_fetch_array($result))
            { 
			echo '<option value="'.$rows['MName'].'">'.$rows['MName'].'</option>';
            }
			?>
            </select>
                        </div>
                                                
                        
                        <div class="form-group">
		      <label for="add">Address<span>*</span></label>
<textarea id="address" name="address"  size="2" maxlength="60" class="form-text" placeholder="Address"><?php echo $row_s2['address'] ?></textarea>		    
           </div> 
            		         
        <div class="form-group" name="location">
		      <label for="loc" >Location<span>*</span></label>
		        <br/>
		         
                  
                      <div class="age_grid">
					  <div class="select-block1">
                     <select name="country" class="countries" id="country">
              <option  value=" <?php echo $row_s2['country'] ?> " class="form-text "> <?php echo $row_s2['country'] ?> </option>
                      </select>
					  </div>
					  </div>
					  <br/>
					  <div class="age_grid">
					  <div class="select-block1">
                     <select name="state" class="states" id="state">
              <option  value=" <?php echo $row_s2['state'] ?> "  class="form-text "> <?php echo $row_s2['state'] ?> </option>
                     </select>
					 </div>
					 </div>
					 <br/>
					 <div class="age_grid">
					 <div class="select-block1">
                     <select name="city" class="cities" id="city">
              <option value=" <?php echo $row_s2['city'] ?> "   class="form-text"> <?php echo $row_s2['city'] ?> </option>
                     </select>
					 </div>
					 </div>
					 <br/>

              </div>
              
            <div class="form-group">
		      <label for="pin">Pincode<span>*</span></label>
		     <input type="number" id="pincode" placeholder="pincode" name="pincode" value="<?php echo $row_s2['pincode']; ?>"  size="2" class="form-text">
		</div>
          
            <div class="form-group">
		      <label for="phone">Phone(Residence/Office)<span>*</span></label>
		   <input type="number" id="phone" name="phone"  value="<?php echo $row_s2['phone']?>"   size="2"  class="form-text" placeholder="Phone Number"/>
		    </div>
            
            <div class="form-group">
		      <label for="mobile">Mobile No.<span>*</span></label>
	<input type="number" id="mobile" name="mobile"   value="<?php echo $row_s2['mobile']?>"  size="2"  class="form-text   " placeholder="Mobile Number"/>
  			           
		    </div>
            <input type="submit" id="next2" name="next2" value="NEXT" class="btn_1 submit">           
</div> 
</div>
</form>           
<!--start of third form-->
<form id="form3" action="#" method="post" style="display:none">
                    
               <div class="candidate3_info" id="div3" >
               <div class="form-group">
		      <label for="comp"><span>Complexion<span>*</span></label>
		        
                <div class="age_grid">
		         <div class="col-sm-4 form_box">
                  <div class="select-block1">
                  <select name="comp" id="comp" class="form-text ">
	                    <option value=" <?php echo $row_s1['complexion'] ?> "   > <?php echo $row_s1['complexion'] ?> </option>
                        <option value="light">Light</option>
	                    <option value="fair">Fair</option>
	                    <option value="medium">Medium</option>
	                    <option value="brown">Brown</option>
	                    <option value="black">Black</option>
	              </select>
                        </div>
                        </div>
                        </div>
                        </div>
                       <br/>
                        

                <div class="body_select" id="22">
		      <label for="body">Body Type<span>*</span></label>
		        
                
		         <div class="age_grid">
                 <div class="col-sm-4 form_box">
                  <div class="select-block1">
                  <select name="bodytype" id="bodytype" class="textbox" class="form-text">
    
	                    <option value=" <?php echo $row_s1['bodytype'] ?> "   ><?php echo $row_s1['bodytype'] ?></option>
                        <?php
			$s="select MName from master where MType='5' ";
			$result=mysql_query($s);
 			
			while($rows=mysql_fetch_array($result))
            { 
			echo '<option value="'.$rows['MName'].'">'.$rows['MName'].'</option>';
            }
			?>
                        </select>
                        </div>
                        </div>
                        </div>
                       </div>
                       <br/><br />
                 <div class="bloodgroup_select" id="23">
		      <label for="blood">Bloodgroup<span>*</span></label>
		        
                
		         <div class="age_grid">
                  <div class="col-sm-4 form_box">
                  <div class="select-block1">
                  
                  <select name="bloodgroup" id="bloodgroup" class="textbox" class="form-text   ">
    
	                    <option value="<?php echo $row_s1['bodygroup'] ?> "  ><?php echo $row_s1['bodygroup'] ?></option>
                        <option value="A+">A+</option>
	                    <option value="A-">A-</option>
	                    <option value="B+">B+</option>
	                    <option value="B-">B-</option>
                        <option value="AB+">AB+</option>	                    
                        <option value="AB-">AB-</option>
                        <option value="O+">O+</option>
	                    <option value="O-">O-</option>
                        </select>
                        </div>
                        </div>
                        </div>
                        </div>
                       <br/><br />
             <div class="horoscope_select" id="24">
		      <label for="horoscope">Horoscope<span>*</span></label> 
                <div class="age_grid">
                <div class="col-sm-4 form_box">
                  <div class="select-block1">
                    <select name="horoscope" id="horoscope" class="form-text">
	                    <option value="<?php echo $row_s1['horscope'] ?>" ><?php echo $row_s1['horscope'] ?></option>
                        <option value="not know">Not Know</option>
	                    <option value="aquarius">Aquarius</option>
	                    <option value="pisces">Pisces</option>
	                    <option value="aries">Aries</option>
	                    <option value="taurus">Taurus</option>
	                    <option value="gemini">Gemini</option>
	                    <option value="cancer">Cancer</option>
	                    <option value="leo">Leo</option>
	                    <option value="virgo">Virgo</option>
	                    <option value="libra">Libra</option>
	                    <option value="scorpio">Scorpio</option>
	                    <option value="sagittarius">Sagittarius</option>
	                    <option value="capricorn">Capricorn</option>
	        </select>
            </div>
            </div>
            </div>
            </div>
            <br/><br/>
            <div class="form-group">
           <div class="age_grid">
            <div class="col-sm-4 form_box">
		      <label for="manglik">Manglik</label><br />
		      <input type="radio" id="manglik" name="manglik" value="not know" size="2" checked="<?php if($row_s1['manglik']=='not know'){ echo "checked";}?>" >Not know<br /> <input type="radio" id="manglik" name="manglik" value="yes" size="2" checked="<?php if($row_s1['manglik']=='yes'){ echo "checked";}?>" >Yes<br /> <input type="radio" id="manglik" name="manglik" value="no" size="2" checked="<?php if($row_s1['manglik']=='no'){ echo "checked";}?>" >No
		    </div>
    </div>
    </div>
    <br/><br/><br/><br/>
         <div class="form-group">
		      <label for="edu">Education<span>*</span></label>
		         <div class="age_grid">
                 <div class="col-sm-4 form_box">
                  <div class="select-block1">
                    <select name="edu" id="edu"  class="form-text   ">
	                    <option  value="<?php echo $row_s3['education'] ?>"  ><?php echo $row_s3['education'] ?></option>
	                    <?php
			$s="select MName from master where MType='6' ";
			$result=mysql_query($s);
 			
			while($rows=mysql_fetch_array($result))
            { 
			echo '<option value="'.$rows['MName'].'">'.$rows['MName'].'</option>';
            }
			?>
	             </select>
            </div>
            </div>
            </div>
            </div>
            <br/><br/>
            <div class="form-group">
		      <label for="edudetails">Education Details<span       >*</span></label>
		      <textarea id="edudetails" name="edudetails"  size="2" maxlength="60" class="form-text   " placeholder="Education Details"><?php echo $row_s3['educationdetail'] ?></textarea>
		    </div>
            <br/>
            <div class="occupation_select" id="28">
		      <label for="occu">Occupation Status<span>*</span></label>
		        <div class="age_grid">
                <div class="col-sm-4 form_box">
                  <div class="select-block1">
                    <select name="occu" id="occu"  class="form-text">
                      <option  value="<?php echo $row_s3['desgination'] ?>"  ><?php echo $row_s3['desgination'] ?></option>
                      <?php
			$s="select MName from master where MType='7' ";
			$result=mysql_query($s);
			while($rows=mysql_fetch_array($result))
            { 
			echo '<option value="'.$rows['MName'].'">'.$rows['MName'].'</option>';
            }
			?>
	        </select>
            </div>
            </div>
            </div>
            </div>
            <br/><br/>
            <div class="family_select" id="29">
		      <label for="family">Status of the Family<span>*</span></label>
		         <div class="age_grid">
                <div class="col-sm-4 form_box">
                  <div class="select-block1">
                    <select name="family" id="family"  class="form-text   ">
	                    <option  value="<?php echo $row_s['familysatus'] ?>"  ><?php echo $row_s['familysatus'] ?></option>
	                    <?php
			$s="select MName from master where MType='9' ";
			$result=mysql_query($s);
 			
			while($rows=mysql_fetch_array($result))
            { 
			echo '<option value="'.$rows['MName'].'">'.$rows['MName'].'</option>';
            }
			?>
            </select>
            </div>
            </div>
            </div>
            </div>
           <br/><br/>
           <div class="form-group">
		      <label for="nob">Number of brothers<span       >*</span></label>    
               <!-- <div class="col-sm-4 form_box" style="margin-bottom:5px;">-->
                  <div class="select-block1" id="12">
                  <div class="col-sm-4 form_box">
                    <h>Unmarried</h>
                    <select name="unmarried" class="form-text   ">
                    <option value=" <?php echo $row_s4['unmarriedbro'] ?>"  ><?php echo $row_s4['unmarriedbro'] ?></option>
	                    <option value="0">0</option>
	                    <option value="1">1</option>
	                    <option value="2">2</option>
	                    <option value="3">3</option>
	                    <option value="4">4</option>
	                    <option value="5">5</option>
	                    <option value="6">6</option>
	                    <option value="7">7</option>
	                    <option value="8">8</option>
	                    <option value="9">9</option>
	                    <option value="10">10</option>
	        
             </select>
             <h>Married</h>
                    
                    <select name="married" class="form-text   ">
                    
	                <option value=" <?php echo $row_s4['marriedbro'] ?>"  ><?php echo $row_s4['marriedbro'] ?></option>
	                    <option value="0">0</option>
	                    <option value="1">1</option>
	                    <option value="2">2</option>
	                    <option value="3">3</option>
	                    <option value="4">4</option>
	                    <option value="5">5</option>
	                    <option value="6">6</option>
	                    <option value="7">7</option>
	                    <option value="8">8</option>
	                    <option value="9">9</option>
	                    <option value="10">10</option>
	        
             </select>
             </div>
             </div>
             </div>
             <br/><br/><br/><br/><br/>
             <div class="form-group">
		      <label for="nos">Number of sisters<span>*</span></label>
		         <div class="select-block1" id="12">
                 <div class="col-sm-4 form_box">
                 
                    <h>Unmarried</h>
                    <select name="unmarriedsis" class="form-text   ">
                    
	                <option value=" <?php echo $row_s4['unmarriedsis'] ?>"  ><?php echo $row_s4['unmarriedsis'] ?></option>
	                    <option value="0">0</option>
	                    <option value="1">1</option>
	                    <option value="2">2</option>
	                    <option value="3">3</option>
	                    <option value="4">4</option>
	                    <option value="5">5</option>
	                    <option value="6">6</option>
	                    <option value="7">7</option>
	                    <option value="8">8</option>
	                    <option value="9">9</option>
	                    <option value="10">10</option>
	        
             </select>
             <h>Married</h>
                    <select name="marriedsis" class="form-text   ">
                    <option value=" <?php echo $row_s4['marriedsis'] ?>"  ><?php echo $row_s4['marriedsis'] ?></option>
	                
	                    <option value="0">0</option>
	                    <option value="1">1</option>
	                    <option value="2">2</option>
	                    <option value="3">3</option>
	                    <option value="4">4</option>
	                    <option value="5">5</option>
	                    <option value="6">6</option>
	                    <option value="7">7</option>
	                    <option value="8">8</option>
	                    <option value="9">9</option>
	                    <option value="10">10</option>
	        
             </select>
           <input type="submit" id="next3" name="next3" value="NEXT" class="btn_1 submit"/>    
             </div>
             </div>
           </div>
           <br/><br/>
          
             </div>
             
             </div>
            
             </form>
                       
      		
   
<!-- start of fourth form-->
<form id="form4" method="post" action="#"  style="display:none">

<div class="candidate4_info" >
		<div class="col-sm-6 login_left" >
            <div class="form-group">
              <label for="native">Native place(Home town)<span>*</span></label>  
            <input type="text" id="native" name="native" value="<?php echo $row_s['nativeplace'] ?>"  size="2"  class="form-text   " placeholder="Home Town"/>
            </div>
            <div class="form-group">
		      <label for="hobbies">Extra Curricular Activities/Hobbies<span>*</span></label> 
             <textarea id="hobbiesz" name="hobbiess"  size="2"  class="form-text" placeholder="Hobbies"><?php echo $row_s['hobbies'] ?></textarea>             
            </div>
            <div class="form-group">
            <div class="select-block1" id="12">
                 <div class="col-sm-4 form_box">
                 
		      <label for="specialcase">Special Case:<span>*</span></label>
		       <select name="specialcase" class="form-text" class="textbox">
		<option  value="<?php echo $row_s['specialcase'] ?>" ><?php echo $row_s['specialcase'] ?></option>
		<?php
			$s="select MName from master where MType='2' ";
			$result=mysql_query($s);
 			
			while($rows=mysql_fetch_array($result))
            { 
			echo '<option value="'.$rows['MName'].'">'.$rows['MName'].'</option>';
            }
			?>
        </select>
</div>
</div>
</div>

<div class="form-group">
<div class="select-block1" id="12">
                 <div class="col-sm-4 form_box">
                 
		      <label for="status">Marital Status<span>*</span></label>		      
 <select name="status"  class="textbox" class="form-text   ">
		<option value="<?php echo $row_s['maritalstatus'] ?> " ><?php echo $row_s['maritalstatus'] ?></option>
		<?php
			$s="select MName from master where MType='3' ";
			$result=mysql_query($s);
 			
			while($rows=mysql_fetch_array($result))
            { 
			echo '<option value="'.$rows['MName'].'">'.$rows['MName'].'</option>';
            }
			?>
	</select>
           </div>
           </div>
           </div>
           <div class="form-group">
           <div class="select-block1" id="12">
                 <div class="col-sm-4 form_box">
		      <label for="child">Have Children:<span>*</span></label>		      
 <select name="child"  class="textbox" class="form-text   ">
		<option value="<?php echo $row_s['havechild'] ?>"   ><?php echo $row_s['havechild'] ?></option>
		<option value="yes">Yes</option>
		<option value="no">No</option>
	</select>
           </div>
           </div>
           </div>
           <div class="form-group">
		      <label for="info"> If Special Cases Or Marital Status Not Unmarried Then
                                        Please Specify About Yourself</bold><br/>Note : For privacy this detail will be shown only
                                        to the active registered members<span>*</span></label>
<textarea id="info" name="info"  size="7"  rows="5" cols="50"  class="form-text" placeholder="about yourself"><?php echo $row_s['Comments'];?></textarea>
           </div>
          
            <input type="submit" id="next4" name="next4" value="NEXT" class="btn_1 submit"/>
            </div>
            </div>
            
            </form>
 <!--start of fifth form-->
<form id="form5" name="form5" method="post" action="#" style="display:none" >
   	  <div class="candidate3_info" >
      <div class="col-sm-6 login_left">
      <h1>Father occupation</h1>
	  	    <div class="form-group">
		      <label for="firm">Name Of Firm<span>*</span></label>
		      <input type="text" id="firm" name="firm" value="<?php echo $row_s5['fatherfirm'] ?>"  size="60"  class="form-text ">
		    </div>
		    <div class="form-group">
		      <label for="occupation">Occupation Details<span>*</span></label>
		      <input type="text" id="occupation" name="occupation" value="<?php echo $row_s5['fatheroccupation'] ?>" size="60"  class="form-text ">
		    </div>
            <div class="form-group">
		      <label for="city">City<span>*</span></label>
		      <input type="text" id="city" name="city" value="<?php echo $row_s5['fathercity'] ?>" size="60"  class="form-text ">
		    </div>
            <div class="form-group">
		      <label for="phone">Phone No.<span>*</span></label>
              <input type="number" id="phone" name="phone" value="<?php echo $row_s5['fatherphone'] ?>"  size="60"  class="form-text ">
            </div>
            <h1> MOTHER OCCUPATION</h1>
            <div class="form-group">
		      <label for="edit-name">Name Of Firm<span  >*</span></label>
		      <input type="text" id="firm1" name="firm1"  value="<?php echo $row_s6['motherfirm'] ?>"   size="60" maxlength="60" class="form-text ">
		    </div>
		    <div class="form-group">
		      <label for="edit-pass">Occupation Details<span  >*</span></label>
		  <input type="text" id="occupation1" name="occupation1" value="<?php echo $row_s6['motherfirm'] ?>" size="60" maxlength="128" class="form-text ">
		    </div>
            <div class="form-group">
		      <label for="edit-pass">City<span>*</span></label>
		      <input type="text" id="city1" name="city1" value="<?php echo $row_s6['mothercity'] ?>" size="60" maxlength="128" class="form-text ">
		    </div>
            <div class="form-group">
		      <label for="edit-name">Phone No.<span  >*</span></label>
		      <input type="number" id="phone1" name="phone1" value="<?php echo $row_s6['motherphone'] ?>"  size="60" maxlength="60" class="form-text ">
		    </div>
			  <input type="submit" id= "next5" value="Submit" name="next5" class="btn_1 submit"/>
			</div>
            </div>
           </form>
            
           </div>
           </div>           
</body>    
</html>           
<script>
$( document ).ready(function() {
 $( "#datepicker1").datepicker({
	//dateFormat : 'yy-mm-dd'
 });
});
</script>
<?php include('include/footer.php'); ?>