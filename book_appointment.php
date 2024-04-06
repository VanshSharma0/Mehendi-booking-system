<?php
// Database configuration
$dbHost = 'localhost'; // Change this to your database host
$dbUsername = 'root'; // Change this to your database username
$dbPassword = ''; // Change this to your database password
$dbName = 'mehendi'; // Change this to your database name

// Connect to the database
$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $date = $_POST["date"];
    $time = $_POST["time"];
    $message = $_POST["message"];

    // Prepare and bind SQL statement
    $stmt = $conn->prepare("INSERT INTO appointment (name, email, phone, date, time, message) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $name, $email, $phone, $date, $time, $message);

    // Execute SQL statement
    if ($stmt->execute()) {
        // Redirect back to the form with a success message
        header("Location: appointment_confirmation.php");
        exit;
    } else {
        // Redirect back to the form with an error message
        header("Location: appointment_form.php?status=error");
        exit;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
} else {
    // If the form is not submitted, redirect to the form page
    header("Location: appointment_form.php");
    exit;
}
?>
