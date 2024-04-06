<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include your database connection file or class
    // For example: include('db_connection.php');

    // Get email from the form
    $email = $_POST["email"];

    // Check if the email exists in your database (replace with your database logic)
    // For example: $user = $db->getUserByEmail($email);
    $user = getUserByEmail($email);

    if ($user) {
        // Generate a random password
        $newPassword = generateRandomPassword();

        // Send email
        $subject = "Password Reset";
        $message = "Your new password is: " . $newPassword;
        $headers = "From: webmaster@example.com"; // Change this to your email address

        // Send the email
        mail($email, $subject, $message, $headers);

        // Update the user's password in the database (replace with your database logic)
        // For example: $db->updatePassword($email, $newPassword);
        updatePassword($email, $newPassword);

        // Redirect to a success page or display a success message
        header("Location: reset-success.html");
        exit;
    } else {
        // Redirect to an error page or display an error message
        header("Location: reset-error.html");
        exit;
    }
}

function generateRandomPassword($length = 8) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $password = '';

    for ($i = 0; $i < $length; $i++) {
        $password .= $characters[rand(0, strlen($characters) - 1)];
    }

    return $password;
}

// Simulated database functions - replace with your actual database logic
function getUserByEmail($email) {
    // Replace with your database query logic
    // Example: SELECT * FROM users WHERE email = :email
    // Bind parameters, execute query, and return the user data
    return ['email' => 'user@example.com', 'password' => 'hashed_password'];
}

function updatePassword($email, $newPassword) {
    // Replace with your database update logic
    // Example: UPDATE users SET password = :newPassword WHERE email = :email
    // Bind parameters, execute update query
    // Note: You should hash the new password before updating it in the database
}
?>
