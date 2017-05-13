<?php
error_reporting('0');
session_start();
include('session_check.php');
include('include/header.php');
include('connection.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script>
function Comp() {
var answer=confirm("Are you sure you want to delete");
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

</head>
<body>
<br/>        
<h3 align="center">INBOX</h3>
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	<!-- END SIDEBAR -->
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			
			<!-- /.modal -->
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN STYLE CUSTOMIZER -->
		
			<!-- END STYLE CUSTOMIZER -->
			<!-- BEGIN PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
						<div class="portlet-body">
							                            
							<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
							<thead>
							<tr>
								<th>
									 SENDER ID
								</th>
								<th>
									 Message
								</th>
								<th>
									 Time
								</th>
								<th>
									 Action
								</th>
							</tr>
							</thead>
							<tbody>
							 				   
<?php
			$s="select sender_id,rid,message,time from receiver_message where receiver_id='".$_SESSION['userid']."' ";
			$result=mysql_query($s);
			while($rows=mysql_fetch_array($result))
            { 
			echo'<tr class="opened">
			<td > 
			 '.$rows['sender_id'].'
			</td>
			<td > 
			 '.$rows['message'].'
			</td>
			<td > 
			 '.$rows['time'].'
			</td>
			<td > 
			<a href="del.php?id='.$rows['rid'].'" onclick="return Comp();"> <input type ="submit" name="del" value="delete" id="del"/></a>			
			 </td>
			</tr>';
            }
			?>
						</tbody>
				          </table>
				         </div>
						 </div>
					<!-- END EXAMPLE TABLE PORTLET-->
				</div>
			</div>
			<!-- END PAGE CONTENT -->
		</div>
				   

</body>
<?php include('include/footer.php');?>
</html>