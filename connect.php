<?php
// Database connection parameters
$dsn = "mysql:host=localhost;dbname=mehendi";
$dbusername = "root";
$dbpassword = "";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Extracting form data
    $fullname = $_POST["fullname"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["Confirmpassword"];

    // Validate and sanitize the data (you might want to do more validation)
    // For example, ensure that the passwords match before proceeding

    try {
        // Create a PDO instance
        $pdo = new PDO($dsn, $dbusername, $dbpassword);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Prepare the SQL statement to insert data into the database
        $stmt = $pdo->prepare("INSERT INTO users (fullname, username, email,password) VALUES (?, ?,?,?)");
        
        // Bind parameters and execute the statement
        $stmt->execute([$fullname, $username, $email, $password]); // Storing password in plain text
        
        // Close the database connection
        $pdo = null;

        // Redirect to a success page or do something else upon successful registration
        header("Location: index.php");
        exit();
    } catch (PDOException $e) {
        // Handle database errors gracefully
        echo "Connection failed: " . $e->getMessage();
        // You might want to log the error to a file or database for debugging purposes
    }
}
?>
