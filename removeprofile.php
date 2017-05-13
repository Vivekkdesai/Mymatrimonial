<?php
error_reporting('0');
session_start();
include('session_check.php');
include('connection.php');
include('include/header.php');
?>
<html>
<head>
<script src="jquery/jquery.validate.js"></script>
<script src="jquery/jquery-ui.js"></script>
<script src="jquery/external/jquery/jquery.js"></script>
<script>
$(document).ready(function(){
	$("input").focus(function(){
    $(this).css("background-color", "#cccccc");
    });
    $("input").blur(function(){
    $(this).css("background-color", "#ffffff");
    });
		
	
});		  
</script>
</head>
<body>
<div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="other/Backup/index.html"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">Remove My Profile</li>
     </ul>
   </div>
   <form id="rem" method="post" action="delid.php">
   <div class="services">
   	  <div class="col-sm-6 login_left">
	     
	  	    <div class="form-group">
		      <label for="edit-name">Password<span>*</span></label>
		      <input type="password" id="psw" name="psw"  size="60" maxlength="60" class="form-text ">
		    </div>
		    <div class="form-group">
		      <label for="edit-pass">Reason<span>*</span></label><br />
		      <textarea name="reason" id="reason"></textarea>
		    </div>
            <div class="form-group">
		      <label for="edit-pass">Comments/Feedback<span  >*</span></label><br />
		      <textarea name="comment" id="comment"></textarea>
		    </div>     		    
			<input type="submit" id="delid" class="btn_1 submit" value="DELETE" name="delid"/>
			
			</div>
			</div>
            </form>
			</div>
			</div>
            </body>
            </html>
<?php include('include/footer.php'); ?>