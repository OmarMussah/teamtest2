<?php
        $servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "WingCommander";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
        $departure = array();
        $arrival = array();

        // Check the connection
       //C
      if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
      }else{
	echo 'Connection was successful';
      }
       $sql = "SELECT * FROM Flights";
      if($exeResult = $conn->query($sql)) {
         while($row = mysqli_fetch_assoc($exeResult)){
              $departure[] = $row['departure'];
              $arrival[] =  $row['arrival'];
       }
   }
?>
<html>
<head>
  <link rel="stylesheet" href="styles_1.css">
  <script src="script.js"></script>
<title>Flight Booking </title>
</head>
<body>
<br>
<br>
<h1>Flight Booking </h1>
<br>
<br>
<center>
<form>
<label id="label_1">
    <input type="radio" name="trip-type" value="1" checked onclick="show_1()">
    Round&nbspTrip&nbsp
  </label>
  <label id="label_2">
    <input type="radio" name="trip-type" value="2" onclick="show_2()">
    One&nbspWay&nbspTrip
  </label>
</form>
<center>
<form name="form1" id="form1">
    <select name="departure" id="departure">
    <option value="" selected="selected">From</option>
    <?php 
     $options = '';
     foreach ($departure as $value) {
     $options .= "<option value='$value'>$value</option>";
     }
     echo $options
    ?>
    </select>
    <select name="destination" id="destination">
    <option value="" selected="selected">To</option>
    <?php 
     $options = '';
     foreach ($arrival as $value) {
     $options .= "<option value='$value'>$value</option>";
     }
     echo $options
    ?>
    </select>
    <select name="passenger" id="passenger">
    <option value="" selected="selected">Passenger</option>
    <option value="passenger1">Adult</option>
    <option value="passenger2">Child</option>
    </select>
    <input type = "date" id= "date">
    <select name="class" id="class">
    <option value="" selected="selected">Class</option>
    <option value="class1">Business</option>
    <option value="class2">Economy</option>
    </select>
    <input type = "date" id = "date1">
</form>
<center>
<button id="button"><a href="payment.html">Submit</a></button>
</center>
</body>
</html>