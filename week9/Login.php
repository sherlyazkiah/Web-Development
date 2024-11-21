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