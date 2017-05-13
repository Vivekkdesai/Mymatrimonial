<?php
error_reporting(0);
include('header1.php'); 
include('connection.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
$s="select email from register_candidate ";
$k=mysql_query($s);
$row=mysql_fetch_assoc($k);
?>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<link rel="stylesheet" href="time.css" />    
<script src="jquery/external/jquery/jquery.js"></script>
<script src="img/js/jquery.min.js"></script>
<script src="img/js/jquery.form.js"></script>
<script src="jquery/jquery.validate.js"></script>
<script src="jquery/jquery-ui.js"></script>
<script src="time.js"></script>
<script src="slider.js"></script>
<script>
function add()
{
$('#sunny').append('<tr><td><select name="relation[]" id="relation[]"><option value="">Select One</option><?php
$s="select MName from master where MType='10' ";$result=mysql_query($s);while($rows=mysql_fetch_array($result)){echo '<option value="'.$rows['MName'].'">'.$rows['MName'].'</option>';}?></select></td><td><input name="fullname[]" type="text" id="fullname" /></td><td><input name="faddress[]" type="text" id="faddress" /></td><td ><input name="city[]" type="text" id="city" /></td><td><input name="fphone[]" type="number" id="fphone"/></td><td><input name="fbutton" type="button" onclick="return add();"value="add relation" /></td></tr>');}</script>
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
	password: {
			required: true,
			minlength: 6,			
		},
		confirm_password: {
					required: true,
					minlength: 6,
					equalTo: "#password"
				},
				email: {
					required: true,
					email: true
				},
				fname: "required",
				lname: "required",		
	},
	messages: {
		email: "please enter email",
		profile: "please select profile",
		annual:"please select one",
		fname: "please fill your name",
		lname: "please fill your surname",
		father: "please fill father name",
		grandfather: "please fill grandfather name",
		gender: "please choose gender",
		password: {
					required: "Please provide a password",
					minlength: "Your password must be at least 5 characters long"
				},
				confirm_password: {
					required: "Please provide a password",
					minlength: "Your password must be at least 5 characters long",
					equalTo: "Please enter the same password as above"
				},
						
	},
	submitHandler: function(form) {	 
		var Datastring = $('#form1').serialize();
		$.ajax({
			url: 'login_process.php',
			type: 'post',
			data: Datastring,
			success: function(msg) {
				if(msg=='1')
				{	
					alert('Email id already exits.');				
				}
				else
				{					
					$("#form1").hide(); 
					$("#form2").show();
				}
				
			}
		}); 
		
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
	pincode: {
	required: true,
	minlength: 6,
	maxlength: 6,
	digits: true,	
	},
	phone: {
		required:true,
		minlength: 11,
		maxlength: 11,
	},
	mobile: {
		required: true,
		minlength: 10,
		maxlength:12,
		digits: true,
	},		
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
	
		pincode: {
					required: "Please provide a pincode",
					minlength: "Your pincode must be at least 6 digits long"
				},
				phone: {
					required: "Please provide a phone",
					minlength: "Your phone  must be 11 digits long along with postal code",
					//equalTo: "Please enter the same password as above"
				},
				mobile: {
					required: "Please provide a phone",
					minlength: "Your number  must be 10 digits long ",
					//equalTo: "Please enter the same password as above"
				},
						
	},
	submitHandler: function(form) {	 
		
		var Datastring = $('#form2').serialize();  
		$.ajax({
			url: 'login_process.php',
			type: 'post',
			data: Datastring,
			success: function(msg) {
				if(msg=='1')
				{
				alert('phone number already exist');
				}	
				else{
				$("#form2").hide(); 
			$("#form3").show();
				}
			}
		}); 
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
			url: 'login_process.php',
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
			url: 'login_process.php',
			type: 'post',
			data: Datastring,
			success: function(msg) {
				if(msg =='1')
				{
				
				}
			}
		}); 
		$("#form4").hide(); 
		$("#form5").show();
	}
	});
	
$("#form5").validate({
	
rules: {
       },
messages: {
         },
		 submitHandler: function (form) {
		 var Datastring = $('#form5').serialize();
		 $.ajax({
					url: 'login_process.php',
					type: 'post',
					data: Datastring,
					success: function(msg) {
						if(msg=='1')
						{
						}					
						}
					});
		alert("your account is under verifcation please wait for 1 week");	
			window.location="loginuser.php";
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
     <form id="form1" method="post" action="#" >
      
   <div class="candidate_info"   >
   	  <div class="col-sm-6 login_left" >
	     
         
	  	    <div class="form-group"  >
		      <label for="email">Email <span >*</span></label>
		      <input type="email" id="email" name="email"  size="2" maxlength="60"  class="form-text" placeholder="Email">
              
		    </div>
            
		    <div class="form-group">
		      <label for="psw">Password <span>*</span></label>
		      <input type="password" id="password" name="password" size="2"  minlength="6" class="form-text" placeholder="Password">
		    </div>
            <div class="form-group">
		      <label for="cpsw">Confirm Password <span>*</span></label>
<input type="password" id="confirm_password" name="confirm_password" size="2"  minlength="6" class="form-text" placeholder="Confirm Password">
		    </div>
            <div class="form-group">
		      <label for="age">Age <span></span></label>
<input type="number" id="age" name="age" size="2" class="form-text" placeholder="age">
		    </div> 
			 
			 <div >
		      <label for='profile'>Biodata Filled By:<span>*</span></label>
		      <select name='profile' size="1"  class='form-text'>
              <option value="">Select</option>
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
		      <label for='annual'>Annual income:<span>*</span></label>
		      <select name='annual' size="1"  class='form-text' >
              <option value="">Select</option>
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
           <label for="status">Relations:<span></span></label>
     <table cellpadding="0"  width="100%">
                                        <tr>
                                            <td cellspacing="10">
                                                <span >Relations</span>
                                            </td>
                                            <td cellspacing="10">
                                                <span>Full Name With Surname</span>
                                            </td>
                                            <td>
                                                <span>Address</span>
                                            </td>
                                            <td>
                                                <span >City</span>
                                            </td>
                                            <td>
                                                <span >Phone No</span>
                                            </td>
                                        </tr>
                                        <tbody id="sunny">
                                        <tr><td><select name="relation[]" class="textbox" id="relation[]" >
		<option value="" >Select One</option>
		<?php
			$s="select MName from master where MType='10' ";
			$result=mysql_query($s);
 			
			while($rows=mysql_fetch_array($result))
            { 
			echo '<option value="'.$rows['MName'].'">'.$rows['MName'].'</option>';
            }
			?>
	</select></td>
                                            <td    >
                                                <input name="fullname[]" type="text" id="fullname" />
                                            </td>
                                            <td    >
                                                <input name="faddress[]" type="text" id="faddress"/>
                                            </td>
                                            <td    >
                                                <input name="city[]" type="text" id="city" />
                                            </td>
                                            <td    >
                                                <input name="fphone[]" type="number" id="fphone"    />
                                            </td>
                                            <td>
                                                <input name="fbutton" type="button" onclick="return add();" value="add relation"  />
                                            </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
          

			 <div class="form-group">
		      <label for="fname">First Name<span>*</span></label>
		      <input type="text" id="fname" name="fname"  size="2" maxlength="60" class="form-text   " placeholder="First Name">
		    </div>
		    <div class="form-group">
		      <label for="lname">Surname<span       >*</span></label>
		      <input type="text" id="lname" name="lname"  size="2" maxlength="60" class="form-text   " placeholder="Surname">
		    </div>
		    
           <div class="form-group">
		      <label for="mama">Mama's Surname(Gotra)<span>*</span></label>
		      <input type="text" id="mama" name="mama"  size="2" maxlength="60" class="form-text   " placeholder="Gotra">
		    </div>
		    <div class="form-group">
		      <label for="gender">Gender</label><span>*</span><br />
		      <input type="radio" id="gender" name="gender" value="male" size="2" maxlength="" >Male<br /> <input type="radio" id="gender" name="gender" value="female" size="2" maxlength="" >Female
		    </div>
		    <div class="form-group">
		      <label for="father">Father's Name<span>*</span></label>
		      <input type="text" id="father" name="father"  size="2" maxlength="60" class="form-text   " placeholder="Father's Name">
		    </div>
            <div class="form-group">
		      <label for="grandfather">Grandfather's Name<span       >*</span></label>
		      <input type="text" id="grandfather" name="grandfather" value="" size="2" maxlength="60" class="form-text   " placeholder="GrandFather's Name">
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
		      <input type="text" id="bplace" name="bplace" value="" size="2" maxlength="60" class="form-text" placeholder="Birth Place">
		    </div>
		    
 <div class="age_select" id="12">
		      <label for="dob">Date Of Birth  <span>*</span></label>
		        <input type="date" id="datepicker" name="datepicker" value=""  size="2" maxlength="60" class="form-text" placeholder="Birth Place">
            </div>
            <div class="age_select" id="12">
		      <label for="timepicker">Time Of Birth  <span>*</span></label>
                <input type="time" id="basic_example_2"   value="" name="basic_example_2" class="form-text"  placeholder="Birth time">
            </div>
            <div class="age_select">
		      <label for="height">Height <span>*</span></label>
		        <div class="age_grid">
		         <div class="col-sm-4 form_box">
                  <div class="select-block1">
                  <select name="height" id="height" class="textbox" class="form-text   ">
		<option value="">Select One</option>
		
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
    </div>
</div>
</div>
<br />
    
    <div class="age_select" id="15">
		      <label for="weight">Weight <span>*</span></label>
		        <div class="age_grid">
		         <div class="col-sm-4 form_box">
                  <div class="select-block1">
                  <select name="weight"  class="form-text" id="weight">
	                 <option value="">SELECT</option>   
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
                        </div>
						</div>                        
						</div>
                        <br />
                        
                        <div class="form-group">
		      <label for="add">Address<span>*</span></label>
		      <textarea id="address" name="address" value="address" size="2" maxlength="60" class="form-text   " placeholder="Address"></textarea>
		    
           </div> 
            
            <div class="form-group">
		      <label for="loc">Location<span>*</span></label>
		        <div class="age_grid">
		         <div class="col-sm-4 form_box">
                  <div class="select-block1">
    
<select name="country" class="countries" id="country">
<option value="" class="form-text   ">Select Country</option>
</select>
<br/>
<select name="state" class="states" id="state">
<option value="" class="form-text   ">Select State</option>
</select>
<br/>
<select name="city" class="cities" id="city">
<option value="" class="form-text   ">Select City</option>
</select>
</div>
</div>
</div>
</div>
<br/><br/><br/><br/>		         
    
            
            
            <div class="form-group">
		      <label for="pin">Pincode<span>*</span></label>
		      <input type="number" id="pincode" name="pincode" value="" size="2" maxlength="6" class="form-text   " placeholder="Pincode"/>
		    </div>
          
            <div class="form-group">
		      <label for="phone">Phone(Residence/Office)<span>*</span></label>
		      <input type="number" id="phone" name="phone" value="" size="2" maxlength="11" class="form-text   " placeholder="Phone Number"/>
		    </div>
            
            <div class="form-group">
		      <label for="mobile">Mobile No.<span>*</span></label>
		      <input type="number" id="mobile" name="mobile" value="" size="2" maxlength="10" class="form-text   " placeholder="Mobile Number"/>
  			           
		    </div>
            <input type="submit" id="next2" name="next2" value="NEXT" class="btn_1 submit">
            
           
</div> 
</div>
</form>           
<!--start of third form-->

<form id="form3" action="#" method="post" style="display:none">
                    
               <div class="candidate3_info" id="div3" >
               <div class="col-sm-6 login_left" >
               <div class="form-group">
		      <label for="comp"><span>Complexion<span>*</span></label>
		        
                <div class="age_grid">
		         <div class="col-sm-4 form_box">
                  <div class="select-block1">
                  <select name="comp" id="comp" class="form-text ">
	                    <option value="">Select One</option>
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
    
	                    <option value="">Select one</option>
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
    
	                    <option value="">Not Know</option>
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
	                    <option value="">select</option>
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
		      <input type="radio" id="manglik" name="manglik" value="not know" size="2" maxlength="" >Not know<br /> <input type="radio" id="manglik" name="manglik" value="yes" size="2" maxlength="" >Yes<br /> <input type="radio" id="manglik" name="manglik" value="no" size="2" maxlength="" >No
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
	                    <option value="">Select one</option>
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
		      <textarea id="edudetails" name="edudetails"  size="2" maxlength="60" class="form-text   " placeholder="Education Details"></textarea>
		    </div>
            <br/>
            <div class="occupation_select" id="28">
		      <label for="occu">Occupation Status<span>*</span></label>
		        <div class="age_grid">
                <div class="col-sm-4 form_box">
                  <div class="select-block1">
                    <select name="occu" id="occu"  class="form-text">
                      <option value="">Select one</option>
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
	                    <option value="">Select one</option>
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
                    <option value="">select</option>
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
                    <option value="">select</option>
	                
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
                    <option value="">select</option>
	                
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
                    <option value="">select</option>
	                
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
            <input type="text" id="native" name="native"  size="2"  class="form-text   " placeholder="Home Town"/>
            </div>
            <div class="form-group">
		      <label for="hobbies">Extra Curricular Activities/Hobbies<span>*</span></label> 
             <textarea id="hobbiesz" name="hobbiess"  size="2"  class="form-text" placeholder="Hobbies"></textarea>             
            </div>
            <div class="form-group">
            <div class="select-block1" id886="12">
                 <div class="col-sm-4 form_box">
                 
		      <label for="specialcase">special case:<span>*</span></label>
		       <select name="specialcase" class="form-text   " class="textbox">
		<option value="">Select One</option>
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
                 
		      <label for="status">marital status<span>*</span></label>		      
 <select name="status"  class="textbox" class="form-text   ">
		<option value="">Select One</option>
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
                 
		      <label for="child">have children:<span>*</span></label>		      
 <select name="child"  class="textbox" class="form-text   ">
		<option value="">Select One</option>
		<option value="yes">yes</option>
		<option value="no">no</option>
	</select>
           </div>
           </div>
           </div>
           
           <div class="form-group">
		      <label for="info"> If Special Cases or Marital Status not unmarried then
                                        please specify about yourself</bold><br/>Note : For privacy this detail will be shown only
                                        to the active registered members<span>*</span></label>
		       <textarea id="info" name="info"  size="7" value="" rows="5" cols="50"  class="form-text" placeholder="about yourself"></textarea>
           </div>
           <div>
           By Submittin this form it is accepted that you have agreed the terms
           and conditions of services provided by this website
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
		      <input type="text" id="firm" name="firm"  size="60"  class="form-text ">
		    </div>
		    <div class="form-group">
		      <label for="occupation">Occupation Details<span>*</span></label>
		      <input type="text" id="occupation" name="occupation"  size="60"  class="form-text ">
		    </div>
            <div class="form-group">
		      <label for="city">City<span>*</span></label>
		      <input type="text" id="city" name="city"  size="60"  class="form-text ">
		    </div>
            <div class="form-group">
		      <label for="phone">Phone No.<span>*</span></label>
              <input type="number" id="phone" name="phone"  size="60"  class="form-text ">
            </div>
            <h1> MOTHER OCCUPATION</h1>
            <div class="form-group">
		      <label for="edit-name">Name Of Firm<span  >*</span></label>
		      <input type="text" id="firm1" name="firm1" value="" size="60" maxlength="60" class="form-text ">
		    </div>
		    <div class="form-group">
		      <label for="edit-pass">Occupation Details<span  >*</span></label>
		      <input type="text" id="occupation1" name="occupation1" size="60" maxlength="128" class="form-text ">
		    </div>
            <div class="form-group">
		      <label for="edit-pass">City<span>*</span></label>
		      <input type="text" id="city1" name="city1" size="60" maxlength="128" class="form-text ">
		    </div>
            <div class="form-group">
		      <label for="edit-name">Phone No.<span  >*</span></label>
		      <input type="text" id="phone1" name="phone1" value="" size="60" maxlength="60" class="form-text ">
		    </div>
			  <input type="submit" id= "next5" value="Submit" name="next5" class="btn_1 submit"/>
			</div>
            </div>
           </form>
           </div>
           </div>
           
           <?php include('include/footer.php'); ?>            
</body>    
</html>
