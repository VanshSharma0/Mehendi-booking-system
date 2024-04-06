<?php
// Establish connection to your database
$servername = "localhost";
$username = "root"; // Your database username
$password = ""; // Your database password
$dbname = "mehendi"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the email address, name, and phone number from the form
    $email = $_POST["email"];
    $name = $_POST['name'];
    $phone = $_POST['phone'];

    // Validate and sanitize the email address
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);

    // Validate email format
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Prepare SQL statement to insert data into the database
        $stmt = $conn->prepare("INSERT INTO subscriber (email, name, phone) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $email, $name, $phone);

        // Execute the statement
        if ($stmt->execute()) {
            // Redirect to a thank you page or display a success message
            header("Location: thank_you.php");
            exit;
        } else {
            // Handle database insertion error
            echo "Error: " . $conn->error;
        }
    } else {
        // Invalid email format, handle the error
        echo "Invalid email address";
    }
}

// Close the database connection
$conn->close();
?>
