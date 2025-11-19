<!DOCTYPE html>
<html>
<head>
<title>Form Submission</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<header>
<h1>My College Portal</h1>
</header>
<nav>
<ul>
<li><a href="index.html">Home</a></li>
<li><a href="about.html">About Us</a></li>
<li><a href="contact.html">Contact</a></li>
</ul>
</nav>
<div class="content container">
<h2>Thank You!</h2>
<p>We have received your message. Here is the information you submitted:</p>
<ul>
<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
echo "<li><strong>Name:</strong> " . htmlspecialchars($_POST['name']) . "</li>";
echo "<li><strong>Email:</strong> " . htmlspecialchars($_POST['email']) . "</li>";
echo "<li><strong>Message:</strong> " . htmlspecialchars($_POST['message']) . "</li>";
}
?>
</ul>
<a href="contact.html">Go back to Contact Page</a>
</div>
<footer>
<p>© 2025 My College Portal</p>
</footer>
</body>
</html>