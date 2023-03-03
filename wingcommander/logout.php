<?php
	
	session_start();
	unset($_SESSION['user_id']);
	unset($_SESSION['user_name']);

  echo '<script type="text/javascript">'; 
  echo 'alert("logged out successfully");'; 
  echo 'window.location.href = "index.html";';
  echo '</script>';
?>