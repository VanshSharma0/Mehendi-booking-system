<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #f8f9fa;
            color: #333;
        }

        .navbar {
            background-color: #1a1a1d;
            border-bottom: 2px solid #5a6268;
            border-radius: 0;
        }

        .navbar-brand {
            font-size: 24px;
        }

        .navbar-brand,
        .navbar-nav .nav-link {
            color: #fff;
        }

        /* Services Section */
        .card {
            border: none;
            transition: transform 0.3s;
            border-radius: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            margin-bottom: 20px;
            background-color: #fff;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
        }

        .card-img-top {
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
        }

        .card-body {
            padding: 20px;
        }

        .card-title {
            font-weight: bold;
            font-size: 20px;
            color: #333;
        }

        .card-text {
            color: #555;
        }

        .btn {
            font-weight: bold;
            text-transform: uppercase;
            border-radius: 20px;
            background-color: #342ac2;
            border: none;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #24188d;
        }

        /* Footer */
/* Footer */
/* Footer */
/* Footer */
footer {
    position: relative;
    width: 100%;
    background-color: #1a1a1d;
    padding: 20px 0;
    color: #fff;
    text-align: center;
}


        .animated-btn {
            animation: pulse 1s infinite alternate;
            font-weight: bold;
            text-transform: uppercase;
            border-radius: 20px;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.1);
            }

            100% {
                transform: scale(1);
            }
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">
            <img src="images/hey1.png" alt="Logo" height="30">
            The Henna Oasis
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link" href="index.php">Home</a>
                <a class="nav-item nav-link" href="contact.php">Contact</a>
                <a class="nav-item nav-link" href="about.php">About</a>
                <a class="nav-item nav-link" href="pricing.php">Pricing</a>
                <a class="nav-item nav-link" href="login.html">Login</a>
                <a class="nav-item nav-link" href="logout.php">Logout</a>
            </div>
        </div>
    </nav>
    <section class="my-5">
    <div class="py-5">
        <h2 class="text-center">Our Services</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="service-item">
                    <img src="images/p1.jpg" class="img-fluid" alt="Service 1">
                    <h3 class="service-title">Henna Art</h3>
                    <p class="service-description">We provide intricate and beautiful henna designs for various occasions such as weddings, festivals, and parties. For more customized designs you can contact us we will revert you back 🤗 </p>
                    <a href="contact.php" class="btn btn-primary">Learn More</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="service-item">
                    <img src="images/p2.jpg" class="img-fluid" alt="Service 2">
                    <h3 class="service-title">Henna Workshops</h3>
                    <p class="service-description">Join our henna workshops to learn the art of henna application. Perfect for beginners and enthusiasts alike. It is our future projects 🙌</p>
                    <a href="futureproject.html" class="btn btn-primary">Learn More</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="service-item">
                    <img src="images/p3.jpg" class="img-fluid" alt="Service 3">
                    <h3 class="service-title">Henna Supplies</h3>
                    <p class="service-description">We offer a wide range of high-quality henna supplies including cones, powders, and stencils for your henna needs. It is our future projects 🙌</p>
                    <a href="futureproject.html" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>&copy; 2024 The Henna Oasis. All rights reserved.</p>
                    <a href="subscribe.html" class="animated-btn btn btn-primary">Subscribe</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>