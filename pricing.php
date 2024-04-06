<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pricing - The Henna Oasis</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        body {
            color: #333;
            background-color: #f8f9fa;
        }

        .navbar-dark .navbar-nav .nav-link,
        .navbar-dark .navbar-brand {
            color: #ffffff;
        }

        .navbar-dark .navbar-toggler-icon {
            background-color: #ffffff;
        }

        .container {
            color: #333;
        }

        h2,
        h4,
        p {
            color: #333;
        }

        .bg-dark {
            background-color: #343a40 !important;
            color: #ffffff;
        }

        .btn-success {
            background-color: #28a745;
            border-color: #28a745;
        }

        .footer {
            background-color: #343a40;
            color: #ffffff;
            padding: 20px 0;
            text-align: center;
            margin-top: 58px;
        }

        .pb-3,
        .py-3 {
            padding-bottom: 1rem !important;
        }

        /* Pricing Cards Styles */
        .card {
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-body {
            padding: 20px;
            text-align: center;
        }

        .card-title {
            font-size: 24px;
            margin-bottom: 15px;
        }

        .card-subtitle {
            color: #6c757d;
        }

        .card-text {
            color: #495057;
        }

        .card-img-top {
            border-top-left-radius: calc(0.25rem - 1px);
            border-top-right-radius: calc(0.25rem - 1px);
            max-width: 100%;
            height: auto;
        }

        .btn-order {
            color: #fff;
            background-color: #28a745;
            border-color: #28a745;
            transition: background-color 0.3s ease;
        }

        .btn-order:hover {
            background-color: #218838;
            border-color: #1e7e34;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <img src="images/hey1.png" alt="Logo" height="30">
        <a class="navbar-brand" href="index.php">
            <h3 class="m-0">The Henna Oasis</h3>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link" href="index.php">Home</a>
                <a class="nav-item nav-link" href="contact.php">Contact</a>
                <a class="nav-item nav-link" href="about.php">About</a>
                <a class="nav-item nav-link" href="checkout.php">Checkout</a>
                <a class="nav-item nav-link" href="logout.php">Logout</a>
            </div>
        </div>
    </nav>

    <div class="container my-5">
        <h2 class="text-center mb-4">Select your designs</h2>

        <div class="row">
            <!-- Pricing Cards -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                    <img src="Designs/1.jpg" class="card-img-top" alt="Design 1">
                    <div class="card-body">
                        <h5 class="card-title">Design 1</h5>
                        <h6 class="card-subtitle mb-2 text-muted">₹1000</h6>
                        <a href="checkout.php?product=Design1&price=1000&image=pricingimg/1.jpg" class="btn btn-order btn-block">Order Now</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                    <img src="Designs/2.jpg" class="card-img-top" alt="Design 1">
                    <div class="card-body">
                        <h5 class="card-title">Design 1</h5>
                        <h6 class="card-subtitle mb-2 text-muted">₹1500</h6>
                        <a href="checkout.php?product=Design1&price=1000&image=pricingimg/1.jpg" class="btn btn-order btn-block">Order Now</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                    <img src="Designs/3.jpg" class="card-img-top" alt="Design 1">
                    <div class="card-body">
                        <h5 class="card-title">Design 1</h5>
                        <h6 class="card-subtitle mb-2 text-muted">₹1200</h6>
                        <a href="checkout.php?product=Design1&price=1000&image=pricingimg/1.jpg" class="btn btn-order btn-block">Order Now</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                    <img src="Designs/4.jpg" class="card-img-top" alt="Design 1">
                    <div class="card-body">
                        <h5 class="card-title">Design 1</h5>
                        <h6 class="card-subtitle mb-2 text-muted">₹800</h6>
                        <a href="checkout.php?product=Design1&price=1000&image=pricingimg/1.jpg" class="btn btn-order btn-block">Order Now</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                    <img src="Designs/5.jpg" class="card-img-top" alt="Design 1">
                    <div class="card-body">
                        <h5 class="card-title">Design 1</h5>
                        <h6 class="card-subtitle mb-2 text-muted">₹1300</h6>
                        <a href="checkout.php?product=Design1&price=1000&image=pricingimg/1.jpg" class="btn btn-order btn-block">Order Now</a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                    <img src="Designs/6.jpg" class="card-img-top" alt="Design 1">
                    <div class="card-body">
                        <h5 class="card-title">Design 1</h5>
                        <h6 class="card-subtitle mb-2 text-muted">₹2000</h6>
                        <a href="checkout.php?product=Design1&price=1000&image=pricingimg/1.jpg" class="btn btn-order btn-block">Order Now</a>
                    </div>
                </div>
            </div>

            

            <!-- Repeat similar card structure for other designs -->
            <!-- Design 2 -->
            <!-- Remaining designs omitted for brevity -->
        </div>
    </div>

    <footer>
        <div class="container">
            <p>&copy; 2024 The Henna Oasis. All rights reserved. | <a style="color: #343a40;" href="privacy.php" class="text-white">Privacy Policy</a></p>
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
