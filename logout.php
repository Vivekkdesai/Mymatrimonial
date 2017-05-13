<?php 
session_start();
unset($_SESSION['userid']);
?>
<script>
window.location = 'loginuser.php';
</script>