 <?php
    session_start();
    if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
        header("location: login.html");
        exit;
    }
?>
 <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - The Henna Oasis</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
      body {
        color: #343a40;
        background-color: #f8f9fa;
      }

      .navbar-dark .navbar-nav .nav-link,
      .navbar-dark .navbar-brand {
        color: #ffffff;
      }

      .container {
        color: #343a40;
      }

      h2 {
        color: #28a745;
      }

      .bg-dark {
        background-color: #343a40 !important;
        color: #ffffff;
      }

      .btn-success {
        background-color: #28a745;
        border-color: #28a745;
        transition: all 0.3s ease;
      }

      .btn-success:hover {
        transform: scale(1.05) rotateY(180deg);
      }

      .btn-success.flipside {
        position: relative;
        overflow: hidden;
      }

      .btn-success.flipside span {
        position: absolute;
        display: block;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        backface-visibility: hidden;
        transition: transform 0.5s;
      }

      .btn-success.flipside span.back {
        transform: rotateY(-180deg);
      }

      /* Form Styling */
      .form-group label {
        font-weight: bold;
      }

      .form-control {
        border-radius: 20px;
      }

      body {
        background: #e0e5ec;
      }

      h1 {
        position: relative;
        text-align: center;
        color: #353535;
        font-size: 50px;
        font-family: "Cormorant Garamond", serif;
      }

      p {
        font-family: 'Lato', sans-serif;
        font-weight: 300;
        text-align: center;
        font-size: 18px;
        color: #676767;
      }

      .frame {
        width: 90%;
        margin: 40px auto;
        text-align: center;
      }

      button {
        margin: 20px;
      }

      .custom-btn {
        width: 130px;
        height: 40px;
        color: #fff;
        border-radius: 5px;
        padding: 10px 25px;
        font-family: 'Lato', sans-serif;
        font-weight: 500;
        background: transparent;
        cursor: pointer;
        transition: all 0.3s ease;
        position: relative;
        display: inline-block;
        box-shadow: inset 2px 2px 2px 0px rgba(255, 255, 255, .5),
          7px 7px 20px 0px rgba(0, 0, 0, .1),
          4px 4px 5px 0px rgba(0, 0, 0, .1);
        outline: none;
      }

      .btn-8 {
        background-color: #f0ecfc;
        background-image: linear-gradient(315deg, #f0ecfc 0%, #c797eb 74%);
        line-height: 42px;
        padding: 0;
        border: none;
      }

      .btn-8 span {
        position: relative;
        display: block;
        width: 100%;
        height: 100%;
      }

      .btn-8:before,
      .btn-8:after {
        position: absolute;
        content: "";
        right: 0;
        bottom: 0;
        background: #c797eb;
        /*box-shadow:  4px 4px 6px 0 rgba(255,255,255,.5),
                -4px -4px 6px 0 rgba(116, 125, 136, .2), 
      inset -4px -4px 6px 0 rgba(255,255,255,.5),
      inset 4px 4px 6px 0 rgba(116, 125, 136, .3);*/
        transition: all 0.3s ease;
      }

      .btn-8:before {
        height: 0%;
        width: 2px;
      }

      .btn-8:after {
        width: 0%;
        height: 2px;
      }

      .btn-8:hover:before {
        height: 100%;
      }

      .btn-8:hover:after {
        width: 100%;
      }

      .btn-8:hover {
        background: transparent;
      }

      .btn-8 span:hover {
        color: #c797eb;
      }

      .btn-8 span:before,
      .btn-8 span:after {
        position: absolute;
        content: "";
        left: 0;
        top: 0;
        background: #c797eb;
        /*box-shadow:  4px 4px 6px 0 rgba(255,255,255,.5),
                -4px -4px 6px 0 rgba(116, 125, 136, .2), 
      inset -4px -4px 6px 0 rgba(255,255,255,.5),
      inset 4px 4px 6px 0 rgba(116, 125, 136, .3);*/
        transition: all 0.3s ease;
      }

      .btn-8 span:before {
        width: 2px;
        height: 0%;
      }

      .btn-8 span:after {
        height: 2px;
        width: 0%;
      }

      .btn-8 span:hover:before {
        height: 100%;
      }

      .btn-8 span:hover:after {
        width: 100%;
      }
    </style>
  </head>

  <body>
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
      <a class="navbar-brand" href="index.php">
        The Henna Oasis
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link" href="index.php">Home</a>
          <a class="nav-item nav-link" href="about.php">About</a>
          <a class="nav-item nav-link" href="pricing.php">Pricing</a>
          <a class="nav-item nav-link" href="login.html">Login</a>
        </div>
      </div>
    </nav>
    <div class="container my-5">
      <h2 class="text-center">Checkout</h2>

      <?php
      
      if (isset($_GET['product']) && isset($_GET['price']) && isset($_GET['image'])) {
        $productName = $_GET['product'];
        $productPrice = $_GET['price'];
        $productImage = $_GET['image'];
        echo "<div class='row'>";
        echo "<div class='col-md-6'>";
        echo "<h4>Selected Product:</h4>";
        echo "<img src='$productImage' alt='$productName' class='img-fluid'>";
        echo "</div>";
        echo "<div class='col-md-6'>";
        echo "<h4>Details:</h4>";
        echo "<p style='color: black;'><strong>Name:</strong> $productName</p>";
        echo "<p style='color: black;'><strong>Price:</strong> $productPrice</p>";
        echo "</div>";
        echo "</div>";
      } else {
        echo "<p>No product selected.</p>";
      }
      ?>



      <!-- Checkout Form -->
      <form id="checkoutForm" action="process_checkout.php" method="post" onsubmit="return validateForm()">
        <!-- Credit Card Information -->
        <div id="card_payment">
          <div class="row">
            <div class="col-md-6">
              <!-- Billing Information -->
              <h4>Billing Information</h4>
              <div class="form-group">
                <label for="name">Full Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
              </div>
              <div class="form-group">
                <label for="email">Email Address:</label>
                <input type="email" class="form-control" id="email" name="email" required>
              </div>
              <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" class="form-control" id="address" name="address" required>
              </div>
              <div class="form-group">
                <label for="city">City:</label>
                <input type="text" class="form-control" id="city" name="city" required>
              </div>
              <div class="form-group">
                <label for="zip">ZIP Code:</label>
                <input type="text" class="form-control" id="zip" name="zip" required>
              </div>
            </div>
            <div class="col-md-6">
              <!-- Payment Information -->
              <h4>Payment Information</h4>
              <div class="form-group">
                <label for="card">Credit Card Number:</label>
                <input type="text" class="form-control" id="card" name="card" required>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="expDate">Expiration Date:</label>
                  <input type="text" class="form-control" id="expDate" name="expDate" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="cvv">CVV:</label>
                  <input type="text" class="form-control" id="cvv" name="cvv" required>
                </div>
              </div>
              <div class="form-group">
                <label for="total">Total Amount:</label>
                <input type="text" class="form-control" id="total" name="total" value="1000">
              </div>
            </div>
          </div>
        </div>
        <button class="custom-btn btn-8"><span>Place order</span></button>  
      </form>
    </div>

    <footer class="bg-dark text-white text-center py-3">
      <p>&copy; 2024 The Henna Oasis. All rights reserved.</p>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
      function validateForm() {
        // Your form validation code here
        return true; // Allow form submission
      }
    </script>
  </body>

  </html>