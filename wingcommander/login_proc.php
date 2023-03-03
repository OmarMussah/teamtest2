<?php
include("connect.php");

  $user_name =  $_POST['username'];
	$user_pass = $_POST['password'];

  $encrypted_pass = password_hash($user_pass, PASSWORD_DEFAULT);
	$sql = "select * from `user_table` where `user_name` = '$user_name'";

  $result= $conn->query($sql);

  if ($result->num_rows > 0) {
    $finalData = mysqli_fetch_assoc($result);
    if (password_verify($user_pass,$finalData['user_pass'])) {
      session_start();
			$_SESSION['user_id'] = $finalData['user_id'];
			$_SESSION['user_name'] = $finalData['user_name'];
      header("Location: Flight_booking.html");
			exit();
    }
    else {
      echo '<script type="text/javascript">'; 
      echo 'alert("Invalid Username or Password");'; 
      echo 'window.location.href = "login.php";';
      echo '</script>';
    }
 

  } else {
    echo '<script type="text/javascript">'; 
    echo 'alert("Invalid Username or Password");'; 
    echo 'window.location.href = "login.php";';
    echo '</script>';
    
  }

















?>