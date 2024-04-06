<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Confirmation - The Henna Oasis</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .confirmation-container {
            text-align: center;
            margin-top: 50px;
            padding: 30px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .confirmation-container h2 {
            color: #007bff;
            font-size: 32px;
        }

        .confirmation-container p {
            margin-bottom: 20px;
            font-size: 18px;
        }

        .confirmation-container strong {
            color: #007bff;
            font-size: 24px;
        }

        footer {
            background-color: #1a1a1d;
            padding: 20px 0;
            color: #fff;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        footer p {
            margin: 0;
        }
    </style>
</head>

<body>
    <?php
    $unique_id = uniqid();
    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mehendi";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Booking appointment
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $date = $_POST["date"];
        $time = $_POST["time"];
        $message = $_POST["message"];

        $sql = "INSERT INTO appointments (name, email, phone, date, time, message) VALUES ('$name', '$email', '$phone', '$date', '$time', '$message')";

        if ($conn->query($sql) === TRUE) {
            $unique_id = $conn->insert_id; // Get the unique ID of the inserted appointment
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    // Close connection
    $conn->close();
    ?>

    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="confirmation-container">
                    <h2>Appointment Booked Successfully 🎉</h2>
                    <p>Your appointment has been successfully booked.</p>
                    <p>Your unique ID: <strong><?php echo $unique_id; ?></strong></p>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <p class="p-3 bg-dark text-white">© 2024 The Henna Oasis. All rights reserved.</p>
    </footer>

</body>

</html>
