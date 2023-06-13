<?php
// Establish a database connection
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$learner_id = $_POST['learner_id'];
// Retrieve other form fields for editing, such as name, surname, grade, balance, year

// Update learner information in the database
$sql = "UPDATE learners SET name='$name', surname='$surname', grade='$grade', balance='$balance', year='$year' WHERE learner_id='$learner_id'";

if ($conn->query($sql) === TRUE) {
    echo "Learner information updated successfully";
} else {
    echo "Error updating learner information: " . $conn->error;
}

// Close the database connection
$conn->close();
?>
