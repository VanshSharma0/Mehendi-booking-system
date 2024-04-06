<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"></script>

    <style>
        /* General Styles */
        body {
            font-family: 'Space Grotesk', sans-serif;
            margin: 0;
            padding: 0;
            background: radial-gradient(#281c3e, #0f051d);
        }

        /* Navbar Styles */
/* Navbar Styles */
.navbar {
    background-color: #281c3e;
    padding: 1rem 2rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.navbar-brand {
    font-size: 1.5rem;
    color: #fff;
    display: flex;
    align-items: center;
    text-decoration: none;
}

.navbar-brand img {
    margin-right: 10px;
    height: 30px;
}

.navbar-toggler {
    border: none;
    background: transparent;
}

.navbar-toggler:focus {
    outline: none;
}

.navbar-toggler-icon {
    color: #fff;
    font-size: 24px;
}

.navbar-nav {
    display: flex;
    align-items: center;
}

.nav-link {
    color: #fff;
    text-decoration: none;
    margin-left: 2rem;
    transition: color 0.3s ease;
}

.nav-link:hover {
    color: #b7b4bb;
}

/* Collapsed Navbar */
@media (max-width: 992px) {
    .navbar-nav {
        display: none;
        flex-direction: column;
        position: absolute;
        top: 100%;
        left: 0;
        background-color: #281c3e;
        width: 100%;
        text-align: center;
    }

    .navbar-nav.show {
        display: flex;
    }

    .navbar-nav .nav-item {
        margin: 10px 0;
    }
}


        /* End Navbar Styles */

        /* Other Styles */
        .team {
            position: relative;
            width: 100%;
            height: 100vh;
            background: radial-gradient(#281c3e, #0f051d);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            margin-top: 80px;
            /* Adjusted to accommodate the navbar */
        }

        .team-content {
            width: 100%;
            max-width: 1350px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, auto));
            align-items: center;
            gap: 2rem;
            text-align: center;
            margin-top: 4rem;
        }

        .team-content img {
            width: 100%;
            height: auto;
            border-radius: 15px;
            margin-bottom: 15px;
        }

        .center h1 {
            color: #fff;
            font-size: 4rem;
            text-align: center;
        }

        .box {
            padding: 16px;
            background: #1b1229;
            border-radius: 15px;
            transition: all .38s ease;
        }

        .box h3 {
            font-size: 23px;
            font-weight: 600;
            color: #fff;
            margin-bottom: 8px;
        }

        .box h5 {
            font-size: 15px;
            font-weight: 600;
            color: #b7b4bb;
            margin-bottom: 15px;
            letter-spacing: 2px;
        }

        .icons i {
            display: inline-block;
            color: #fff;
            font-size: 20px;
            margin: 0 8px;
            transition: all .38s ease;
        }

        .icons i:hover {
            transform: scale(1.2);
        }

        .box:hover {
            transform: translateY(-10px);
            cursor: pointer;
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
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">
            <img src="images/hey1.png" alt="Logo" height="30">
            The Henna Oasis </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link" href="index.php">Home</a>
                <a class="nav-item nav-link" href="contact.php">Contact</a>
                <a class="nav-item nav-link" href="pricing.php">Pricing</a>
                <a class="nav-item nav-link" href="login.html">Login</a>
                <a class="nav-item nav-link" href="logout.php">Logout</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    
    <section class="team">
        <div class="center">
            <h1>Our Team</h1>
        </div>

        <div class="team-content">
            <div class="box">
                <img src="images/san.jpg">
                <h3>Sanchay Sachdeva</h3>
                <h5></h5>
                <div class="icons">
                    <a href="https://twitter.com/SachdevaSanchay"><i class="ri-twitter-fill"></i></a>
                    <a href="https://www.instagram.com/itssachdevasanchay/"><i class="ri-instagram-fill"></i></a>
                    <a href="https://www.linkedin.com/in/sanchay-sachdeva-140535219/"><i class="ri-linkedin-fill"></i></a>
                    <a href="https://github.com/sachdevasanchay"><i class="ri-github-fill"></i></a>
                </div>
            </div>

            <div class="box">
                <img src="images/Screenshot (171).png">
                <h3>Sumeer Mehta</h3>
                <h5>Artist</h5>
                <div class="icons">
                <a href="https://twitter.com/SumeerMehta3"><i class="ri-twitter-fill"></i></a>
                    <a href="https://www.facebook.com/sumeer.mehta.7"><i class="ri-facebook-box-fill"></i></a>
                    <a href="https://instagram.com/sumeer.mehta/"><i class="ri-instagram-fill"></i></a>
                    <a href="https://in.linkedin.com/in/sumeer-mehta-47b6b5194?trk=people-guest_people_search-card"><i class="ri-linkedin-fill"></i></a>
                </div>
            </div>

            <div class="box">
                <img src="images/1222.jpg">
                <h3>Vansh Sharma</h3>
                <h5></h5>
                <div class="icons">
                <a href="https://twitter.com/VanshSh74130867"><i class="ri-twitter-fill"></i></a>
                    <a href="https://instagram.com/epicvanshhh"><i class="ri-instagram-fill"></i></a>
                    <a href="https://www.linkedin.com/in/vansh-sharma-643998220/"><i class="ri-linkedin-fill"></i></a>
                    <a href="https://github.com/VanshSharma0"><i class="ri-github-fill"></i></a>
                </div>
            </div>
        </div>
    </section>
    
</body>

</html>
