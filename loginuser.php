<?php
error_reporting(0);
session_start(); 
include('header1.php'); 
include('connection.php');
if(isset($_REQUEST['login']))
{	
$rec1="select user_id,verify,is_active from register_candidate where user_id ='".$_REQUEST['userid']."' and password='".mysql_real_escape_string(md5($_REQUEST['psw']))."'";
	$d="update register_candidate set last_modify=CURRENT_TIMESTAMP where user_id='".$_REQUEST['userid']."'";
	mysql_query($d);
	$rec=mysql_query($rec1);
	$record=mysql_fetch_assoc($rec);
	if($record>0)
	{
		if($record['verify']==1 && $record['is_active']==1)
		{
		$_SESSION['userid']=$record['user_id'];
		echo "<script> window.location='home.php'</script>";
	}
	else{
		echo "<script> alert('Please check your mail and confirm your email address')</script>";
echo"<script> window.location='loginuser.php'</script>";	
	}
	}
	else
	{
		echo "<script>alert('wrong userid and password') </script>";
		echo"<script> window.location='registeruser.php'</script>";
	}	
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script>
$(document).ready(function(){
	$("#2").click(function(){
	$.ajax
	({
		url: "forgotuser.php",
		type: 'POST',
		data: frm_data_str,
		success: function(msg)
		{
			$("#user_model_fade").modal({
				"backdrop"  : "static",
				"keyboard"  : true,
				"show"      : true
			});		
		}
	});
});
});
</script>
<style>
.box {
    display: inline-block;
    margin-bottom: 20px;
    vertical-align: top;
    width: 120px;
}
</style>     
</head>
<body>
<div id="user_model_fade" class="modal fade in" style="display: block;">
  <div class="modal-dialog" style="width:42%">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">
          LOGIN </h4>
      </div>
      <!-- BEGIN FORM-->
  
      <form id="cat_frm" name="cat_frm"  class="form-horizontal" method="post" enctype="multipart/form-data" >
        <div class="modal-body">
            <div class="form-group">
              <label class="box">USER-ID<span> *</span></label> 
              <input type="text" class="box" name="userid" id="userid"  placeholder="Enter ID"> <br/>
            <label class="box">PASSWORD<span> *</span></label>        
                <input type="password" name="psw" class="box" id="psw"  placeholder="Enter Password"> 
            </div> 
 </div>
        <div class="modal-footer" style="margin-top:0px">
          <a id='2' href="forgotuser.php">FORGOT PASSWORD</a>
          <button data-bb-handler="success" type="submit" id="login" name="login" class="btn btn-success">LOGIN</button>
          <a href="registeruser.php">cancel</a>
          
        </div>
      </form>
      <!-- END FORM--> 
    </div>
  </div>
  </div>	  
</body>
</html>	