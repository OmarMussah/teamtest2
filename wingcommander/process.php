<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "WingCommander";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get user inputs from the form
$amount = $_POST['view'];
$name = $_POST['name' ];
$email = $_POST['email'];
$phone = $_POST['num'];
$card_number = $_POST['card_number'];
$cvv = $_POST['cvv'];

// Insert user inputs into the database
$query = mysqli_query($conn, "INSERT INTO `creditcard`(`amount`, `name`, `email`, `phone`, `card_number`, `cvv`) VALUES ('$amount','$name','$email','$phone','$card_number','$cvv')");
header("Location: thankyou.html");
// if ($conn->query($query) === TRUE) {
//     // Redirect the user to a thank you page
//     header("Location: thankyou.html");
//     exit();
// } else {
//     echo "Error: " . $query . "<br>" . $conn->error;
// }

// Close the database connection
$conn->close();
?>
