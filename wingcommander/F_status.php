<?php
include("connect.php");
$departure= $_POST['departure'];
// echo $departure;
$destination = $_POST['destination'];
$date = $_POST["date"];
$flight_number = $_POST["flight-number"];

// echo $date;


$sql = "SELECT status, arrival_date FROM Flights WHERE departure = '$departure' AND arrival = '$destination'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
  $status = $row["status"];
  $arrival_date = $row["arrival_date"];
  
} else {
  echo "0 results";
}
$conn->close();

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body style="background-image: url(airplane_porth.jpg); background-position: center;">

<table class="table table-light fw-bold">
  <thead>
    <tr>
      <th scope="col">Flight Number</th>
      <td scope="col">Departure</td>
      <td scope="col">Destination</td>
      <td scope="col">Departure Time</td>
      <td scope="col">Arrival Time</td>
      <td scope="col">Status</td>
    </tr>
  </thead>
  <tbody>

    <?php 

      echo "
      <tr>
        <th scope='row'>$flight_number</th>
        <td>$departure</td>
        <td>$destination</td>
        <td>$date</td>
        <td>$arrival_date</td>
        <td>$status</td>
      </tr>
      
      ";

    ?>


  </tbody>
</table>

</body>
</html>
