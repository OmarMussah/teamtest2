<!DOCTYPE html>
<html>
<head>
	<title>Login Here!</title>
	<style>
		body {
			background-image: url("plane-in-clouds-adrian-kulawik.jpg");
			background-size: cover;
			background-position: center;
			font-family: Arial, sans-serif;
			text-align: center;
			padding-top: 50px;
		}
		h1 {
        text-align: center;
        color: purple;
        background-color: pink;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 5px;
        max-width: 650px;
        margin: auto;
        margin-bottom: 15px;
      }
		form {
			width: 40%;
			background-color: #fff;
			padding: 40px;
			border-radius: 5px;
			margin: 20px auto;
			box-shadow: 0 0 10px rgba(0,0,0,0.5);
		}
		input[type=text], input[type=password] {
			padding: 10px;
			margin-bottom: 20px;
			border-radius: 5px;
			border: none;
			box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
			border: 1px solid pink;
		}
		input[type=submit] {
			background-color: pink;
			color: purple;
			padding: 20px 40px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			transition: background-color 0.3s;

		}
		input[type=submit]:hover {
			background-color: grey;
			color:purple;
		}

		label {
			display: inline-block;
			margin-top: 10px;
			margin-right: 10px;
			color: purple;
			font-size: 18px;
			font-weight: bold;
			width: 17%;
			text-align: left;

		}
                #back{
                     position: absolute;
                     left: 60px;
                     background-color: #FFB6C1;
                     border: none;
                     border-radius: 5px;
                     color: purple;
                     cursor: pointer;
                     font-size:20px;
                     width:200px;
                     height:45px;
                     bottom:10px;
                    }
              #back:hover {
                    background-color: grey;
                    color:Purple;
              }
	</style>
</head>
<body>
	<h1> Welcome back!</h1>
	<form action="login_proc.php" method="POST">
		<label for="username">Username:</label>
		<input type="text" id="username" name="username" required><br>
		<label for="password">Password:</label>
		<input type="password" id="password" name="password" required><br>
		<input type="submit" value="Login">
        <!-- <div id="error-message"></div> -->
	    <p>Forgot password? <a href="#">Reset it here</a>.</p>
	</form>
        <a href="index.html">
        <button id="back">&nbsp;Back</button>
        </a>
<body>









