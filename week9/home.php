<?php
session_start();
// Redirect to login page if not logged in
if (!isset($_SESSION['username'])) {
    header('Location: login.php'); // Redirect to login page
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grand Hotel - Home</title>
    <link rel="stylesheet" href="styleHome.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div class="header">
        <img src="hotel logo1.jpg" alt="hotellogo" width="100px">
        <nav>
            <a href="home.php">Home</a>
            <a href="priceCheck.php">Price Check</a>
            <a href="sessionLogout.php">Logout</a>
        </nav>
    </div>

    <div class="banner" id="slider">
        <img id="sliderImage1" src="banner1.jpg" class="slider-image" alt="Banner 1">
        <img id="sliderImage2" src="banner2.jpg" class="slider-image" alt="Banner 2">
        <img id="sliderImage3" src="banner3.jpg" class="slider-image" alt="Banner 3"> 
    </div>

    <div class="profile">
        <h2>Hotel Profile</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>

    <div class="footer">
        <p>Grand Hotel, 123 Regency Boulevard, Downtown District, Metropolitan City, 12345</p>
    </div>

    <script src="home.js"></script>
</body>
</html>
