<?php 
include('header3.php');
include('myconnection.php');
//$k=mysql_query("select email from tbl_enquiry");/$s=mysql_fetch_assoc($k);
//$_SESSION['email']=$_REQUEST['email'];
if(isset($_REQUEST['btnsmt']))
{
$ins="insert into des(designation)values('".$_REQUEST['des']."')";
mysql_query($ins);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="jquery/external/jquery/jquery.js"></script>
<script src="jquery/jquery.validate.js"></script>
<script src="jquery/jquery-ui.js"></script>
</head>
<body>
<div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="#"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">Add Designation</li>
     </ul>
   </div>
   <form id="enquiry" name="enquiry" method="post" action="#">
   <div class="col-md-9 search_left">
  	
   <div class="form_but1">
	<label for="email">Designation : </label>
	<div  >
		<input type="des" name="des" placeholder="designation" class="form-text" />
		
			</div>
  </div>
      <br />
    <input type="submit" name="btnsmt" class="btn_1 submit" value="Submit" id="btn"/>
           </form>
            </div>
            </div>
            </div>
<div>

</div>
</body>
</html>
