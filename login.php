<?php
session_start();

// Database connection parameters
$dsn = "mysql:host=localhost;dbname=mehendi";
$dbusername = "root";
$dbpassword = "";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Extract form data
    $username = $_POST["username"];
    $password = $_POST["password"];

    try {
        // Create a PDO instance
        $pdo = new PDO($dsn, $dbusername, $dbpassword);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Prepare the SQL statement to check user credentials
        $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->execute([$username]);
        $user = $stmt->fetch();

        if ($user && $user['password'] === $password) {
            // User authenticated successfully
            $_SESSION['loggedin'] = true;
            echo "Login successful!";
            
            // Insert login information into login_logs table
            $login_time = date("Y-m-d H:i:s");
            $stmt = $pdo->prepare("INSERT INTO login (username, login_time) VALUES (?, ?)");
            $stmt->execute([$username, $login_time]);

            // Redirect the user to a dashboard or homepage
            header("Location: checkout.php");
            exit();
        } else {
            // Authentication failed
            echo "Invalid username or password!";
        }

        // Close the database connection
        $pdo = null;

    } catch (PDOException $e) {
        // Handle database errors gracefully
        echo "Connection failed: " . $e->getMessage();
        // You might want to log the error to a file or database for debugging purposes
    }
}
?>