<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Henna Oasis</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #f8f9fa;
            color: #333;
        }

        /* Navbar */
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

        /* Carousel */
        .carousel-item img {
            height: 600px;
            object-fit: cover;
        }

        .carousel-caption {
            background-color: rgba(0, 0, 0, 0.5);
            padding: 20px;
            border-radius: 10px;
            bottom: 50px;
            /* Adjust the position */
            transform: translateY(-50%);
            /* Center vertically */

        }

        .carousel-caption h3 {
            color: #fff;
            font-weight: bold;
            text-transform: uppercase;
            font-size: 36px;
        }

        .carousel-control-prev,
        .carousel-control-next {
            width: 5%;
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            filter: brightness(0) invert(1);
            /* Change arrow color */
        }

        .carousel-control-prev-icon {
            margin-left: -20px;
            /* Adjust position */
        }

        .carousel-control-next-icon {
            margin-right: -20px;
            /* Adjust position */
        }

        /* Carousel Indicators */
        .carousel-indicators {
            bottom: -50px;
            /* Adjust position */
        }

        .carousel-indicators li {
            background-color: #fff;
            /* Change indicator color */
            border-radius: 50%;
            /* Make indicators circular */
            width: 10px;
            height: 10px;
            margin: 0 5px;
        }

        .carousel-indicators .active {
            background-color: #000;
            /* Change active indicator color */
        }

        /* About Section */
        .aboutimg {
            max-width: 100%;
            height: auto;
            border-radius: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        /* Services Section */
        .card {
            border: none;
            transition: transform 0.3s;
            border-radius: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .card:hover {
            transform: translateY(-5px);
        }

        /* Contact Section */
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        label {
            color: #333;
            font-weight: bold;
        }

        .btn {
            font-weight: bold;
            text-transform: uppercase;
            border-radius: 20px;
        }

        .animated-btn {
            animation: pulse 1s infinite alternate;
            /* Apply the animation */
        }

        /* Footer */
        footer {
            background-color: #1a1a1d;
            padding: 20px 0;
            color: #fff;
            text-align: center;
        }

        .btn-home {
            background-color: #FF5733;
            /* Orange color */
        }

        .btn-venue {
            background-color: #33FFB5;
            /* Turquoise color */
        }

        .btn-outdoor {
            background-color: #FF33E9;
            /* Pink color */
        }


        .animated-btn {
            animation: pulse 1s infinite alternate;
            /* Apply the animation */
            font-weight: bold;
            text-transform: uppercase;
            border-radius: 20px;
            /* Additional styles if needed */
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

    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="3000"> <!-- Set interval to 3000 milliseconds (3 seconds) -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <!-- Add more carousel indicators for additional items -->
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/1.jpg" class="d-block w-100" alt="Fancy 1">
            </div>
            <div class="carousel-item">
                <img src="images/2.jpg" class="d-block w-100" alt="Fancy 2">
            </div>
            <div class="carousel-item">
                <img src="images/p15.jpg" class="d-block w-100" alt="Fancy 3">
            </div>
            <!-- Add more carousel items as needed -->
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>



    <!-- About Section -->
    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="images/4.jpg" class="img-fluid aboutimg" alt="About Us Image">
                </div>
                <div class="col-md-6">
                    <h2 class="display-4">We are Artistic professionals</h2>
                    <p class="py-3">We provide convenient doorstep henna services for any occasion, bringing intricate designs and cultural charm directly to your venue. Experience the artistry of henna at minimal prices, tailored to suit your celebrations</p>
                    <a href="about.php" class="btn btn-primary animated-btn">Discover More</a>
                </div>
            </div>
        </div>
    </section>

    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">Our Services</h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img class="card-img-top" src="images/p4.jpg" alt="Service 1">
                        <div class="card-body">
                            <h4 class="card-title">Henna Art</h4>
                            <p class="card-text">We provide intricate and beautiful henna designs for various occasions such as weddings, festivals, and parties. For more customized designs you can contact us we will revert you back 🤗</p>
                            <a href="ourservices.php" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img class="card-img-top" src="images/p5.jpg" alt="Service 2" style="height : 416px;">
                        <div class="card-body">
                            <h4 class="card-title">Henna Workshops</h4>
                            <p class="card-text">Join our henna workshops to learn the art of henna application. Perfect for beginners and enthusiasts alike. It is our future projects 🙌</p>
                            <a href="ourservices.php" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img class="card-img-top" src="images/p3.jpg" alt="Service 3">
                        <div class="card-body">
                            <h4 class="card-title">Henna Supplies</h4>
                            <p class="card-text">We offer a wide range of high-quality henna supplies including cones, powders, and stencils for your henna needs. It is our future projects 🙌</p>
                            <a href="ourservices.php" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="my-5">
        <h2 class="text-center">Just Book and we will deliver or contact you .</h2>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img src="images/p6.jpg" class="card-img-top" alt="Image 1">
                        <div class="card-body">
                            <h5 class="card-title">Home</h5>
                            <p class="card-text">Discover our exquisite collection of home decor items. If you want packages then you can contact us or if you want a single design you can go to Pricing Page</p>
                            <a href="pricing.php" class="btn btn-primary btn-home">Explore</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img src="images/p7.jpg" class="card-img-top" alt="Image 2">
                        <div class="card-body">
                            <h5 class="card-title">Destination Venue</h5>
                            <p class="card-text">Explore our stunning destination venues for your special events. If you want packages then you can contact us or if you want a single design you can go to Pricing Page</p>
                            <a href="pricing.php" class="btn btn-primary btn-venue">Discover</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img src="images/p8.jpg" class="card-img-top" alt="Image 3">
                        <div class="card-body">
                            <h5 class="card-title">Outdoor Places</h5>
                            <p class="card-text">Experience nature's beauty in our outdoor locations.If you want packages then you can contact us or if you want a single design you can go to Pricing Page</p>
                            <a href="pricing.php" class="btn btn-primary btn-outdoor">Explore</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="my-4">
        <div class="py-4">
            <h2 class="text-center">Our Lovely customers</h2>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img src="images/p9.jpg" class="card-img-top" alt="Image 1">
                        <div class="card-body">
                            <h5 class="card-title"> Lavanya  </h5>
                            <p class="card-text"></p>
                            <a href="customerpage.html" class="btn btn-primary">Reviews</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img src="images/p10.jpg" class="card-img-top" alt="Image 2">
                        <div class="card-body">
                            <h5 class="card-title"> Raha </h5>
                            <p class="card-text"></p>
                            <a href="customerpage.html" class="btn btn-primary">Reviews</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img src="images/p11.jpg" class="card-img-top" alt="Image 3">
                        <div class="card-body">
                            <h5 class="card-title"> Saumya</h5>
                            <p class="card-text"></p>
                            <a href="customerpage.html" class="btn btn-primary">Reviews</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="my-4">
        <div class="py-4">
            <h2 class="text-center">The Designs Made by Various Henna Artists</h2>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img src="images/p12.jpg" class="card-img-top" alt="Henna Artist 1">
                        <div class="card-body">
                            <h5 class="card-title">Kamal preet kaur</h5>
                            <p class="card-text">🎓</p>
                            <a href="artistport.html" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img src="images/p13.jpg" class="card-img-top" alt="Henna Artist 2">
                        <div class="card-body">
                            <h5 class="card-title">Krishika aggarwal</h5>
                            <p class="card-text">🎓</p>
                            <a href="artistport.html" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img src="images/p14.jpg" class="card-img-top" alt="Henna Artist 3">
                        <div class="card-body">
                            <h5 class="card-title">Gungun gupta</h5>
                            <p class="card-text">🎓</p>
                            <a href="artistport.html" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <section class="my-4">
        <div class="py-4">
            <h2 class="text-center">Contact Us</h2>
        </div>

        <div class="w-50 m-auto">
            <form action="contact_process1.php" method="post">
                <div class="form-group">
                    <label for="name" style="color: cadetblue;"><i class="fas fa-user"></i> Name:</label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <label for="email" style="color: cadetblue;"><i class="fas fa-envelope"></i> Email:</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="number" style="color: cadetblue;"><i class="fas fa-phone"></i> Phone Number:</label>
                    <input type="text" id="number" name="number" class="form-control" placeholder="Enter your phone number">
                </div>
                <div class="form-group">
                    <label for="message" style="color: cadetblue;"><i class="fas fa-comment"></i> Message:</label>
                    <textarea id="message" name="message" class="form-control" rows="5" placeholder="Enter your message"></textarea>
                </div>
                <button type="submit" class="btn btn-success animated-btn">Submit</button>
            </form>
        </div>
    </section>


    <section class="my-4">
        <div class="py-4">
            <h2 class="text-center">About Us</h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="images/hey1.png" class="img-fluid" alt="About Us Image">
                </div>
                <div class="col-md-6">
                    <h3>Who We Are</h3>
                    <p>We are The Henna Oasis, a team of passionate and professional henna (Mehendi) artists dedicated to bringing intricate and beautiful henna designs to our clients. With years of experience, we have perfected our craft and take pride in delivering stunning henna artistry for weddings, festivals, and other special occasions.</p>
                    <h3>Our Mission</h3>
                    <p>Our mission is to make every moment memorable by adding the elegance of henna art to celebrations. We strive to exceed our clients' expectations with our creativity, attention to detail, and commitment to excellence.</p>
                    <h3>Why Choose Us</h3>
                    <ul>
                        <li>Experienced and skilled henna artists</li>
                        <li>Customized designs tailored to your preferences</li>
                        <li>High-quality and natural henna products</li>
                        <li>Exceptional customer service and professionalism</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <!-- Add more sections as needed -->

    <footer>
        <p class="p-3 bg-dark text-white">© 2024 The Henna Oasis. All rights reserved.</p>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>