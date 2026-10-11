<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <link rel="stylesheet" href="../css/feedback.css">
</head>
<body>
    <nav class="navbar">
    <img src="../image/logo.png" alt="Artify" class="logo" />
    <ul>
      <li><a href="homepage.php" class="nav-button">Home</a></li>
      <li><a href="product.php" class="nav-button">Products</a></li>
       <li><a href="contactus.php" class="nav-button">Contact Us</a></li>
      <li><a href="signup.php" class="nav-button">Sign Up</a></li>
      <li><a href="login.php" class="nav-button">Login</a></li>
      <li><a href="aboutus.php" class="nav-button">About Us</a></li> 
      <li><a href="login.php" class="nav-button">Log Out</a></li>
    </ul> 
  </nav>
    <h1>Feedback</h1>
    <p>Your feedback is important to us and helps us improve</p>
  
  <div class="main-content">
    <form>

      <label>How satisfied are you with Artify?</label>
      <div class="satisfaction">
        <label>
          <input type="radio" name="satisfaction" required>
          😊 Very Satisfied
        </label>

        <label>
          <input type="radio" name="satisfaction">
          🙂 Satisfied
        </label>

        <label>
          <input type="radio" name="satisfaction">
          😐 Neutral
        </label>

        <label>
          <input type="radio" name="satisfaction">
          🙁 Dissatisfied
        </label>

        <label>
          <input type="radio" name="satisfaction">
          😠 Very Dissatisfied
        </label>
      </div>

      <label>Your Feedback</label>
      <textarea placeholder="Tell us what you think..." required></textarea>

      <label>
        <input type="checkbox"> I agree to share my feedback publicly
      </label>
      <input type="submit" value="Submit Feedback">
    </form>
  </div>
  
  <footer class="footer">
  <p class="footer-text">
    © 2025 Artify. All rights reserved.
  </p>

  <div class="social-icons">
    <a href="#" aria-label="Google">
      <img src="https://imagepng.org/wp-content/uploads/2019/08/google-icon.png" />
    </a>
    <a href="#" aria-label="Facebook">
      <img src="https://upload.wikimedia.org/wikipedia/commons/0/05/Facebook_Logo_%282019%29.png" />
    </a>
    <a href="#" aria-label="Apple">
      <img src="https://upload.wikimedia.org/wikipedia/commons/f/fa/Apple_logo_black.svg" />
    </a>
  </div>
</footer>

  
</body>
</html>