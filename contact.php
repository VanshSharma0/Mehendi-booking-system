<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Mehendi Booking System</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl7/1L_dstPt3HV5HzF6Gvk/e9T9hXmJ58bldgTk+" crossorigin="anonymous">
    <style>
        /* Global Styles */
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'Montserrat', sans-serif;
        }

        body {
            background: #f8f9fa;
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

        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml;charset=utf8,<svg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'><line stroke-miterlimit='10' x1='4' y1='16' x2='28' y2='16' stroke='white' stroke-width='2'/><line stroke-miterlimit='10' x1='16' y1='4' x2='16' y2='28' stroke='white' stroke-width='2'/></svg>");
        }

        @media (max-width: 991.98px) {
            .navbar-brand {
                font-size: 20px;
            }

            .navbar-toggler {
                border: none;
                padding: 0 15px;
                background: transparent;
                font-size: 24px;
            }
        }

        /* Section Wrapper */
        #section-wrapper {
            padding: 60px 0;
        }

        .box-wrapper {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            flex-wrap: wrap;
        }

        /* Info Section */
        .info-wrap,
        .form-wrap {
            background-color: #fff;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
            margin: 20px;
            flex: 1;
            max-width: 400px;
        }

        .info-title,
        .form-title {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 30px;
            color: #343a40;
            text-align: center;
        }

        .info-sub-title {
            font-size: 1.2rem;
            color: #555;
            margin-bottom: 40px;
            text-align: center;
        }

        .info-details li {
            font-size: 1rem;
            color: #555;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
        }

        .info-details li i,
        .social-icons li i {
            font-size: 1.5rem;
            margin-right: 15px;
            color: #F44770;
        }

        /* Form Section */
        .form-fields input,
        .form-fields textarea {
            border: none;
            outline: none;
            background: #f8f9fa;
            font-size: 1rem;
            color: #555;
            padding: 15px;
            width: 100%;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .form-fields textarea {
            min-height: 150px;
            resize: none;
        }

        .submit-button {
            background-color: #F44770;
            color: #fff;
            font-size: 1.1rem;
            font-weight: bold;
            padding: 15px 30px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .submit-button:hover {
            background-color: #343a40;
        }

        .social-icons {
    list-style: none;
    display: flex;
    justify-content: center;
    gap: 20px;
    margin-top: 30px;
}

.social-icons li {
    display: flex;
}

.social-icons a {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background-color: #F44770;
    color: #343a40;
    font-size: 20px;
    transition: background-color 0.3s;
}

.social-icons a:hover {
    background-color: #343a40;
}


        /* Media Queries */
        @media only screen and (max-width: 767px) {
            .box-wrapper {
                flex-direction: column;
                align-items: center;
            }

            .info-wrap,
            .form-wrap {
                width: 90%;
                margin: 20px auto;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
    <img src="images/hey1.png" alt="Logo" height="30">
        <a class="navbar-brand" href="index.php">The Henna Oasis</a>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link" href="index.php">Home</a>
                <a class="nav-item nav-link" href="about.php">About</a>
                <a class="nav-item nav-link" href="pricing.php">Pricing</a>
                <a class="nav-item nav-link" href="login.html">Login</a>
                <a class="nav-item nav-link" href="logout.php">Logout</a>
            </div>
        </div>
    </nav>

    <section id="section-wrapper">
        <div class="box-wrapper">
            <div class="info-wrap">
                <h2 class="info-title">Contact Information</h2>
                <p class="info-sub-title">You can contact us or visit to our office which is mentioned below in the location</p>
                <ul class="info-details">
                    <li><i class="fas fa-map-marker-alt"></i>Jwala heri market, new delhi, india</li>
                    <li><i class="fas fa-phone"></i><a href="tel:+1234567890">+91 9289890909</a></li>
                    <li><i class="fas fa-envelope"></i><a href="mailto:info@example.com">vanished934@gmail.com</a></li>
                </ul>
                <ul class="social-icons">
                <li><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="https://twitter.com/?lang=en"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="https://www.instagram.com/accounts/login/"><i class="fab fa-instagram"></i></a></li>
                </ul>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3503.415677547049!2d77.22189041508638!3d28.632244982406345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce3e5bb8a3001%3A0x52c2a68364c9ba36!2sPaschim%20Vihar%2C%20New%20Delhi%2C%20Delhi!5e0!3m2!1sen!2sin!4v1644839152453!5m2!1sen!2sin" width="300px" height="300px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="form-wrap">
                <h2 class="form-title">Get in Touch</h2>
                <form action="contact_process.php" method="post" enctype="multipart/form-data">
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
                    <div class="form-fields">
                        <div class="form-group">
                            <label for="name" style="color: cadetblue;"><i class="fas fa-user"></i> Name:</label>
                            <input type="text" name="name" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <label for="email" style="color: cadetblue;"><i class="fas fa-envelope"></i> Email:</label>
                            <input type="email" name="email" placeholder="Your Email">
                        </div>
                        <div class="form-group">
                            <label for="message" style="color: cadetblue;"><i class="fas fa-comment"></i>Subject:</label>
                            <input type="text" name="subject" placeholder="Subject">
                        </div>
                        <div class="form-group">
                            <label for="message" style="color: cadetblue;"><i class="fas fa-comment"></i> Message:</label>
                            <textarea name="message" placeholder="Your Message"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="designImage" style="color: cadetblue;"><i class="fas fa-image"></i> Upload Design Image:</label>
                            <input type="file" name="designImage" id="designImage" accept="image/*">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="submit-button">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 Mehendi Booking System. All rights reserved.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
