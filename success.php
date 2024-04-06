<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Order Success</title>
<link rel="stylesheet" href="styles.css">
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f8f9fa;
    margin: 0;
    padding: 0;
  }

  .container {
    max-width: 600px;
    margin: 100px auto;
    padding: 30px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center;
  }

  h1 {
    color: #007bff;
    margin-bottom: 20px;
  }

  p {
    color: #555;
    margin-bottom: 30px;
  }

  .btn {
    display: inline-block;
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s;
  }

  .btn:hover {
    background-color: #0056b3;
  }
</style>
</head>
<body>

<div class="container">
<?php
// Generate random order ID
$order_id = uniqid();

// Insert order details into the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mehendi";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare variables for insertion, and ensure they are safe from SQL injection
$name = isset($_POST['name']) ? $conn->real_escape_string($_POST['name']) : '';
$email = isset($_POST['email']) ? $conn->real_escape_string($_POST['email']) : '';
// Add other form fields as necessary

// SQL query to insert data into the database
$sql = "INSERT INTO orders (order_id, name, email) VALUES ('$order_id', '$name', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "<p>Your order has been successfully placed. Your Order ID is: <strong>$order_id</strong></p>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>

  <a href="index.php" class="btn">Back to Home</a>
</div>

</body>
</html>
