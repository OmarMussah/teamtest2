<!DOCTYPE html>
<html>
<head>
	<title>Sign Up Page</title>
	<style>
		body {
		    background-image: url('istockphoto-902818356-170667a.jpg');
			background-size: cover;
			background-position: center;
			font-family: Arial, sans-serif;
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
			margin: 50px auto;
			width: 50%;
			background-color: #fff;
			padding: 20px;
			box-shadow: 0px 0px 10px #888;
		}
		label {
			display: inline-block;
			margin-top: 10px;
			color: purple;
			font-size: 18px;
			font-weight: bold;
			width: 17%;
			text-align: left;

		}
		input[type=text], input[type=email], input[type=password] {
			width: 100%;
			padding: 10px;
			margin-top: 5px;
			margin-bottom: 10px;
			border: none;
			border-bottom: 2px solid pink;
			font-size: 16px;
			color: #666;
		}
		input[type=submit] {
			background-color: pink;
			color: purple;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			font-size: 16px;
		}
		input[type=submit]:hover {
			background-color: grey;
			color: purple;
		}
                #back{
                  position: absolute;
                  left: 70px;
                  background-color: #FFB6C1;
                  border: none;
                  border-radius: 5px;
                  color: purple;
                  cursor: pointer;
                  font-size:20px;
                  width:200px;
                  height:45px;
                  bottom:30px;
                  transition: all 0.3s ease;}
               #back:hover {
                  background-color: grey;
                  color:Purple;
                  }
	</style>
</head>
<body>
	<h1>Sign Up</h1>
	<form action="signup_proc.php" method="POST">
		<label for="name">Name:</label>
		<input type="text" id="name" name="uname" required>

		<label for="email">Email:</label>
		<input type="email" id="email" name="email" required>

		<label for="password">Password:</label>
		<input type="password" id="password" name="password" required>
        <center>
		<input type="submit" name="signup" value="Sign Up">
         </center>   
	</form>
        <a href="index.html">
        <button id="back">&nbsp;Back</button>
        </a>
</body>
</html>
