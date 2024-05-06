<?php
// Database connection parameters
$servername = "localhost"; // Assuming your database is hosted locally
$username = "id22032268_akhack9th";
$password = "23ffnIHI$";
$dbname = "id22032268_akhack9th";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    // SQL to insert data into table
    $sql = "INSERT INTO `mycollection` (`name`, `email`,`pass`) VALUES ('$name', '$email','$pass')";

    if ($conn->query($sql) === TRUE) {
        header("Location: other.html");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>


