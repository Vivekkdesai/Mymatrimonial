<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
include('connection.php'); 
include('header1.php');
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<div id="user_model_fade" class="modal fade in" style="display: block;">
  <div class="modal-dialog" style="width:42%">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">
          SEARCH BY ID </h4>
      </div>

     	<div class="newsletter">
<form method="post" action="searchbyguest.php">
			  <input type="text" name="searchbyid" id="searchbyid" placeholder="Enter Profile ID :">
			  <input type="submit" name="search" id="search" value="Go" >
		   </form>
           </div>
           </div>
           </div>
           </div>
</body>
</html>