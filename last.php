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
    $email = $_POST['email'];
    $name = $_POST['name'];
    $contactno = $_POST['contactno'];
    $stream = $_POST['stream'];
    $scoringsubject = $_POST['scoringsubject'];
    $favoritesubject = $_POST['favoritesubject'];
    $aim = $_POST['aim'];
    $skillsubject = $_POST['skillsubject'];
    $boardmarks = $_POST['boardmarks'];
    $grade = $_POST['grade'];
    $tc = $_POST['tc'];
    $institute = $_POST['institute'];

    // SQL to insert data into table
    $sql = "INSERT INTO `othercollection` (`email`, `name`,`contactno`,`stream`,`scoringsubject`,`favoritesubject`,`aim`,`skillsubject`,`boardmarks`,`grade`,`tc`,`institute`) 
    VALUES ('$email', '$name','$contactno','$stream','$scoringsubject','$favoritesubject','$aim','$skillsubject','$boardmarks','$grade','$tc','$institute')";

    if ($conn->query($sql) === TRUE) {
         header("Location: thank.html");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>


