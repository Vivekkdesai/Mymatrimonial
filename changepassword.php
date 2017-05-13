<?php
error_reporting('0');
session_start();
include('include/header.php');
include('connection.php'); 
if(isset($_REQUEST['login']))
{
	if($_REQUEST['password']!=$_REQUEST['confirmpassword'])
	{
		echo'<script>alert("please enter same password")</script>';
	}
	else{
	$sel="update register_candidate set password='".mysql_real_escape_string(md5($_REQUEST['password']))."' where user_id='".$_SESSION['userid']."'";
	$res=mysql_query($sel);	
  	$i= mysql_num_rows($res);
	if(count($i)>0)
	{
echo"<script>
alert(' password has been updated')
	</script>";
		
	echo"<script>
	window.location='home.php'
	</script>";
	}				
}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>change password</title>
</head>
<body>
<div class="grid_3" >
<div class="container" >
<div class="breadcrumb1">
     <ul>
        <a href="index.html"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">CHANGE PASSWORD</li>
     </ul>
   </div>
   <form id="forgotform" method="post" action="#">
   <div class="services">
   	  <div class="col-sm-6 login_left">
  	    <div class="form-item form-type-password form-item-pass">
	      <label for="password">New Password <span  title="This field is required.">*</span></label>
	      <input type="password" id="password" name="password" size="60"  class="form-text" placeholder="password">
	    </div>
        
        <div class="form-item form-type-password form-item-pass">
	      <label for="password">confirm New Password <span  title="This field is required.">*</span></label>
	      <input type="password" id="confirmpassword" name="confirmpassword" size="60"  class="form-text" placeholder="confirm password">
	    </div>
        
	    <div class="form-actions">
	    	<input type="submit" id="loginsubmit" name="login" value="update" class="btn_1 submit">
             
	    </div>
	   
	  </div>
      </div>
    </div>
      </form>
   
<div>
<?php
include('include/footer.php'); ?>
</div>
</body>
</html>