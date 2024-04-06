<?php
// Database connection settings
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mehendi";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Form data
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $address = isset($_POST['address']) ? $_POST['address'] : '';
    $city = isset($_POST['city']) ? $_POST['city'] : '';
    $zip = isset($_POST['zip']) ? $_POST['zip'] : '';
    $payment_method = isset($_POST['payment_method']) ? $_POST['payment_method'] : 'card';
    $total_amount = isset($_POST['total']) ? $_POST['total'] : '1000'; // Make sure this matches the input field name

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format");
    }

    // Set default values for card information
    $card_number = '';
    $expiration_date = '';
    $cvv = '';

    // Check payment method and retrieve card information if applicable
    if ($payment_method == 'card') {
        $card_number = isset($_POST['card']) ? $_POST['card'] : '';
        $expiration_date = isset($_POST['expDate']) ? $_POST['expDate'] : '';
        $cvv = isset($_POST['cvv']) ? $_POST['cvv'] : '';
    }

    // Prepare and bind statement
    $stmt = $conn->prepare("INSERT INTO checkout (name, email, address, city, zip, card_number, expiration_date, cvv, total_amount, payment_method) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssssss", $name, $email, $address, $city, $zip, $card_number, $expiration_date, $cvv, $total_amount, $payment_method);

    // Execute
    if ($stmt->execute()) {
        // Redirect to success page
        header("Location: success.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement
    $stmt->close();

    // Close database connection
    $conn->close();
}
?>
