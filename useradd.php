<?php 
include('header3.php');
include('myconnection.php');
$sel="SELECT * from des";
$res=mysql_query($sel);
$row=mysql_fetch_assoc($res);
if(isset($_REQUEST['btnsmt']))
{
echo $ins="insert into user_info('uid','oid','desgination','emailid','name','password','usertype') values(Null,'1','".$_REQUEST['firm']."','".$_REQUEST['email']."','".$_REQUEST['name']."','".$_REQUEST['psw']."','1')";
mysql_query($ins);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="jquery/external/jquery/jquery.js"></script>
<script src="jquery/jquery.validate.js"></script>
<script src="jquery/jquery-ui.js"></script>
<script type="text/javascript">
$(document).ready(function(){
$("input").focus(function(){
    $(this).css("background-color", "#cccccc");
    });
    $("input").blur(function(){
    $(this).css("background-color", "#ffffff");
    });	
	$("#bidform").validate({
		rules: {

			name: {
				required: true,
			},
			
			psw: {
				 required: true,
			},
			
						
			email: "required",

		},
		messages: {
				
			    name: {
				required: "Please provide your name",
			},
			
			psw: {
				required: "Please provide your password",
				
			},
			
			email: "please provide your valid email",
			
		},
		submitHandler: function(form) {
			var Datastring = $('#bidform').serialize();
			$.ajax({
					url: '',
					type: 'post',
					data: Datastring,
					success: function(msg) {
						
												
					}
			
    }); 
	alert("your form has been submited successfully");	
			window.location="useradd.php";
		
		}
		
		
		});
});

</script>
</head>
<body>
<div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="#"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">User Add</li>
     </ul>
   </div>
   <form id="bidform" name="bidform" method="post" action="#">
   <div class="col-md-9 search_left">
  	
   <div class="form_but1" id="edu">
		      <label for="edu">Designation<span title="This field is required.">*</span></label>
		        <div class="age_grid">
                     <div class="col-sm-4 form_box">
                  <div class="select-block1">
<select id='firm'  name='firm' onchange="reload(this.form)">
		<option value="<?php echo $row['designation']; ?>"><?php echo $row['designation']; ?></option>
		
  </select>
                  </div>
            </div>
            </div>
            </div>
			<br/><br/>

  <div class="form_but1" >
	<label for="name">Name : </label>
	<div>
	<input type="text" name="name" placeholder="Name" class="form-text"/>
	</div>
  </div>
   <div class="form_but1" >
	<label for="name">Password : </label>
	<div  >
		<input type="password" name="psw" placeholder="Password" class="form-text"/>
	</div>
	
  </div>

  <div class="form_but1" >
	<label for="phone">Email-Id : </label>
	<div>
		<input type="email" name="email" placeholder="Email" class="form-text"/>
	</div>
	 
  </div>
      
      
    <input type="submit" name="btnsmt" class="btn_1 submit" value="Submit" id="btn"/>
           </form>
            </div>
            </div>
            </div>
<div>

</div>
</body>
</html>
