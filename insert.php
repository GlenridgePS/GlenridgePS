<?php
$servername = "your_servername";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve learner data from the form
$name = $_POST['learner-name'];
$surname = $_POST['learner-surname'];
$grade = $_POST['learner-grade'];
$year = $_POST['learner-year'];
$balance = $_POST['learner-balance'];

// Prepare and execute the SQL statement
$sql = "INSERT INTO learners (name, surname, grade, year, balance) VALUES ('$name', '$surname', '$grade', '$year', '$balance')";
if ($conn->query($sql) === TRUE) {
    echo "Learner data added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
?>
