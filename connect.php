<?php
// Database credentials
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "addpost";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$trainName = $_POST['trainName'];
$postingPlace = $_POST['postingPlace'];
$from = $_POST['from'];
$to = $_POST['to'];

// Prepare and execute SQL statement
$sql = "INSERT INTO addpost (trainName, postingPlace, from, to) VALUES ('$trainName', '$postingPlace', '$from', '$to')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>