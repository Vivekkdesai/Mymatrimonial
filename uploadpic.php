<?php
error_reporting(0);
session_start();
include('connection.php');
include('header1.php');
include('session_check.php');
if(isset($_REQUEST['login']))
{
$tmp_name = $_FILES["file1"]["tmp_name"];
$name = $_FILES["file1"]["name"];
move_uploaded_file($tmp_name, "uploadpic/".$name);
mysql_query("update register_candidate set photo='".$_FILES['file1']['name']."' where user_id='".$_SESSION['userid']."'");
$result=mysql_query("select photo from register_candidate where user_id='".$_SESSION['userid']."'");
$row=mysql_fetch_assoc($result);
echo"<script>
alert(' Profile picture has been changed')
	</script>";
echo"<script>
window.location='home.php'
	</script>";

}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><script src="moot.js"></script></head>
<body>
<div id="user_model_fade" class="modal fade in" style="display: block;">
  <div class="modal-dialog" style="width:42%">
    <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="bootbox-close-button close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">
          UPLOAD PICTURE </h4>
      </div>
      <!-- BEGIN FORM-->
  
      <form id="cat_frm" name="cat_frm"  class="form-horizontal" method="post" enctype="multipart/form-data"  action="#" >
        <div class="modal-body">
            <div class="form-group">
              <label>UPLOAD:</label> 
              <input type="file"  name="file1" id="file1"> <br/>
             <label><?php echo '<img  height ="300px" width="250px" src="uploadpic/'.$row['photo'].'"/>';?></label>
            </div> 
 </div>
        <div class="modal-footer" style="margin-top:0px">
     <button data-bb-handler="success" type="submit" id="login" name="login" class="btn btn-success">SAVE</button>
          <a href="home.php">skip</a>  
        </div>
      </form>
      <!-- END FORM--> 
    </div>
  </div>
  </div>	  
</body>
</html>	