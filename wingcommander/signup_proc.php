<?php
include("connect.php");

if (isset($_POST['signup'])) 
{
	//collection form data
	$user_email =  $_POST['email'];
	$user_pass = $_POST['password'];
  $user_name =  $_POST['uname'];


	//encrypt password
	//use the php password_hard function
	$encrypted_pass = password_hash($user_pass, PASSWORD_DEFAULT);

	//write query
	//user role (1 is admin, 2 is standard user)
	//user status( 1 is active, 2 is inactive)
	$sql = "INSERT INTO user_table (user_name, user_email, user_pass)
	VALUES ('$user_name','$user_email', '$encrypted_pass')";

	// check if query worked
	if ($conn->query($sql) === TRUE) {
	  
		//redirect to homepage
		header("Location: index.html");
		exit();

	} else {
		//echo error but continue executing the code to close the session
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}

	//close database connection
	$conn->close();
}
else
{
	//redirect to register page
	header("Location: signup.php");
	exit();
}








?>