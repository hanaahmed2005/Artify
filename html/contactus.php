<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="../css/contactus.css">
</head>

<body>

    <nav class="navbar">
        <img src="../image/logo.png" alt="Artify" class="logo" />
        <ul>
            <li><a href="homepage.php" class="nav-button">Home</a></li>
            <li><a href="product.php" class="nav-button">Products</a></li>
            <li><a href="signup.php" class="nav-button">Sign Up</a></li>
            <li><a href="login.php" class="nav-button">Login</a></li>
            <li><a href="aboutus.php" class="nav-button">About Us</a></li>
            <li><a href="login.php" class="nav-button">Log Out</a></li>
        </ul>
    </nav>

    <section class="contact-header">
        <h1>Contact Us</h1>
        <p>Let your ideas flow — we’re happy to hear from you</p>
        <span class="brush-line"></span>
    </section>

    <div class="contact-info">
  <div class="info-box">
    <span>📧</span>
    <p>artify@email.com</p>
  </div>

  <div class="info-box">
    <span>📞</span>
    <p>+20 106 931 2273</p>
  </div>

  <div class="info-box">
    <span>📍</span>
    <p>Cairo, Egypt</p>
  </div>
</div>


    <div class="main-content">
        <form>
            <label for="name">Name</label>
            <input type="text" id="name" required>

            <label for="email">Email</label>
            <input type="email" id="email" required>

            <label for="message">Message</label>
            <textarea id="message" required></textarea>

            <input type="submit" value="Send Message">
        </form>
    </div>

    <p class="feedback">Send your Feedback? <a href="feedback.html">Send Feedback</a></p>

    <footer class="footer">
        <p class="footer-text">© 2025 Artify. All rights reserved.</p>

        <div class="social-icons">
            <a href="#"><img src="https://imagepng.org/wp-content/uploads/2019/08/google-icon.png"></a>
            <a href="#"><img src="https://upload.wikimedia.org/wikipedia/commons/0/05/Facebook_Logo_%282019%29.png"></a>
            <a href="#"><img src="https://upload.wikimedia.org/wikipedia/commons/f/fa/Apple_logo_black.svg"></a>
        </div>
    </footer>

</body>
</html>
