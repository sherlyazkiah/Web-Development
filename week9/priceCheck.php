<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grand Hotel - Price Check</title>
    <link rel="stylesheet" href="stylePrice.css">
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

    <div class="container mt-5">
        <div class="price-check">
            <h2 class="text-center">Input to Check The Price</h2>
            <form id="priceForm">
                <label for="floor">Floor</label>
                <input type="number" id="floor" name="floor" value="1" min="1" class="form-control mb-3" required>

                <label for="type">Type</label>
                <select id="type" name="type" class="form-select mb-3">
                    <option value="5000">Standard</option>
                    <option value="6000">Superior</option>
                    <option value="7000">Deluxe</option>
                </select>

                <label for="days">Day(s)</label>
                <input type="number" id="days" name="days" value="1" min="1" class="form-control mb-3" required>

                <label for="discount">Discount</label>
                <select id="discount" name="discount" class="form-select mb-3">
                    <option value="none">None</option>
                    <option value="member">Member</option>
                    <option value="birthday">Birthday Promo</option>
                </select>

                <button type="button" class="btn btn-primary w-100" onclick="calculatePrice()">CHECK</button>
            </form>

            <div id="result" class="result mt-4 text-center"></div>
        </div>
    </div>

    <div class="footer">
        <p>Grand Hotel, 123 Regency Boulevard, Downtown District, Metropolitan City, 12345</p>
    </div>

    <script src="price.js"></script>
</body>
</html>
