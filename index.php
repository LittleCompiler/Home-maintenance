<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home Maintenance System</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<!-- Navigation -->
<header>
    <nav class="navbar">
        <h1 class="logo">HomeCare</h1>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="login.php" class="btn">Login</a></li>
            <li><a href="register.php" class="btn-primary">Register</a></li>
        </ul>
    </nav>
</header>

<!-- Hero Section -->
<section class="hero">
    <h2>Your Trusted Home Maintenance Partner</h2>
    <p>
        Easily request services, track repairs, and connect with verified professionals.
        Never miss a maintenance schedule again.
    </p>
    <a href="register.php" class="btn-primary">Get Started</a>
</section>

<!-- Features Section -->
<section class="features">
    <h2>Our Features</h2>
    <div class="feature-box">
        <div class="card">
            <h3>Easy Service Booking</h3>
            <p>Request plumbing, electrical, cleaning, and more in minutes.</p>
        </div>
        <div class="card">
            <h3>Verified Professionals</h3>
            <p>Connect with trusted and approved service providers.</p>
        </div>
        <div class="card">
            <h3>Maintenance Tracking</h3>
            <p>Track repair history and get automated reminders.</p>
        </div>
    </div>
</section>

<!-- Footer -->
<footer>
    <p>© <?php echo date("Y"); ?> Home Maintenance System | All Rights Reserved</p>
</footer>

<script src="assets/script.js"></script>
</body>
</html>