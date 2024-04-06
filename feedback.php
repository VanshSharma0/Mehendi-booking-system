<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Feedback Page</title>
  <style>
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  background-image: url('images/1.jpg');
  background-size: cover;
  background-position: center;
}

    .container {
      max-width: 800px;
      margin: 20px auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
      text-align: center;
      color: #333;
    }

    form {
      margin-top: 20px;
    }

    label {
      display: block;
      margin-bottom: 5px;
      color: #666;
    }

    input[type="text"],
    textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    textarea {
      height: 150px;
    }

    input[type="submit"] {
      background-color: #007bff;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 4px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #0056b3;
    }

    .rating {
      display: flex;
      justify-content: center;
      margin-bottom: 15px;
    }

    .rating input {
      display: none;
    }

    .rating label {
      cursor: pointer;
      font-size: 30px;
      color: #ccc;
    }

    .rating label:hover,
    .rating label:hover ~ label,
    .rating input:checked ~ label {
      color: #f7d42c;
    }

    .feedback-type select {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    .additional-options input[type="checkbox"] {
      margin-bottom: 5px;
    }
    
  </style>
</head>
<body>

<div class="container">
  <h1>Feedback Form</h1>
  <form action="submit_feedback.php" method="post">
    <label for="name">Your Name:</label>
    <input type="text" id="name" name="name" required>

    <label for="email">Your Email:</label>
    <input type="text" id="email" name="email" required>

    <label for="message">Your Feedback:</label>
    <textarea id="message" name="message" required></textarea>

    <div class="rating">
      <input type="radio" id="star5" name="rating" value="5">
      <label for="star5">★</label>
      <input type="radio" id="star4" name="rating" value="4">
      <label for="star4">★</label>
      <input type="radio" id="star3" name="rating" value="3">
      <label for="star3">★</label>
      <input type="radio" id="star2" name="rating" value="2">
      <label for="star2">★</label>
      <input type="radio" id="star1" name="rating" value="1">
      <label for="star1">★</label>
    </div>

    <div class="feedback-type">
      <label for="feedback-type">Feedback Type:</label>
      <select id="feedback-type" name="feedback-type">
        <option value="complaint">Complaint</option>
        <option value="suggestion">Suggestion</option>
        <option value="compliment">Compliment</option>
        <option value="other">Other</option>
      </select>
    </div>

    <div class="additional-options">
      <label>Additional Options:</label>
      <input type="checkbox" id="anonymous" name="anonymous">
      <label for="anonymous">Submit anonymously</label>
      <br>
      <input type="checkbox" id="newsletter" name="newsletter">
      <label for="newsletter">Subscribe to newsletter</label>
    </div>

    <input type="submit" value="Submit Feedback">
  </form>
</div>

</body>
</html>
