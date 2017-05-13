<?php
error_reporting(0);
session_start();
include('connection.php');
include('include/header.php');
?>
<!DOCTYPE HTML>
<html>
<body>
<br/>
<h3 align="center">BLOCK LIST</h3>
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
									 User-Id
								</th>
								
								<th>
									 Name
								</th>
	
								<th>
									 Action
								</th>
							</tr>
							</thead>
							<tbody>
                     <?php 
						$sel="select r.user_id,r.firstName,r.surname from register_candidate r,blocked b where r.block=1 and b.user_id='".$_SESSION['userid']."' and b.blockid='".$_SESSION['id']."' ";
							$ur=mysql_query($sel);
							while($row=mysql_fetch_array($ur))
							{
							?>	

							<tr>
								<td>
									 <?php echo $row['user_id']; ?>
                                </td>
								<td>
                                     <?php echo $row['firstName']. ' '.$row['surname'];?>
								</td>
								
                                <td><a href="unblock.php?id=<?php echo $row['user_id'] ;?>">Unblock</a></td>
							</tr>
							<?php } ?>
							</tbody>
							</table>
</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->
				</div>
			</div>
			<!-- END PAGE CONTENT -->
		</div><div> <?php include('include/footer.php');?></div>
</body>
</html>       					

