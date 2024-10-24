<?php
session_start();

if (isset($_SESSION['username'])) {
    header('Location: home.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        $error = "Must be filled";
    } 
    elseif (strlen($password) < 5) {
        $error = "Password is at least 5 characters";
    } 
    elseif (!preg_match('/[A-Za-z]/', $password) || !preg_match('/[0-9]/', $password)) {
        $error = "Password must consist of letters and numbers.";
    } 
    else {
        $_SESSION['username'] = $username;

        header('Location: home.php');
        exit();
    }
}
?>
<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <title>Grand Hotel Login</title>
</head>
<body class="d-flex justify-content-center align-items-center vh-100 bg-light">
    <div class="card p-4 shadow" style="width: 500px;">
        <h2 class="card-title text-center mb-4">Grand Hotel</h2>
        <form id="loginForm" method="POST" action="">
            <div class="mb-3">
                <label for="username" class="form-label">Username:</label>
                <input type="text" id="username" name="username" class="form-control" required>
            </div>
            
            <div class="mb-3">
                <label for="password" class="form-label">Password:</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
        </form>
        <p id="errorMessage" class="error text-danger mt-2">
            <?php if (isset($error)) echo $error; ?>
        </p>
    </div>

    <script>
        document.getElementById('loginForm').addEventListener('submit', function (event) {
            let username = document.getElementById('username').value;
            let password = document.getElementById('password').value;
            let errorMessage = '';

            if (username === '' || password === '') {
                errorMessage = "Must be filled";
            }
            else if (password.length < 5) {
                errorMessage = "Password is at least 5 characters";
            }
            else if (!/\d/.test(password) || !/[a-zA-Z]/.test(password)) {
                errorMessage = "Password must consist of letters and numbers.";
            }

            if (errorMessage) {
                event.preventDefault();
                document.getElementById('errorMessage').textContent = errorMessage;
            }
        });
    </script>
</body>
</html>
