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

// Delete learner information from the database
$sql = "DELETE FROM learners WHERE learner_id='$learner_id'";

if ($conn->query($sql) === TRUE) {
    echo "Learner deleted successfully";
} else {
    echo "Error deleting learner: " . $conn->error;
}

// Close the database connection
$conn->close();
?>
