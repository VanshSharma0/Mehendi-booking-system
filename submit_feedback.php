<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "mehendi";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$rating = $_POST['rating'];
$feedbackType = $_POST['feedback-type'];
$anonymous = isset($_POST['anonymous']) ? 1 : 0;
$newsletter = isset($_POST['newsletter']) ? 1 : 0;

// Prepare SQL statement to insert data into the feedback table
$sql = "INSERT INTO feedback (name, email, message, rating, feedbacktype, anonymous, newsletter) 
        VALUES ('$name', '$email', '$message', '$rating', '$feedbackType', '$anonymous', '$newsletter')";

// Execute SQL statement
if ($conn->query($sql) === TRUE) {
    echo "Thank you for your feedback!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close database connection
$conn->close();
?>
