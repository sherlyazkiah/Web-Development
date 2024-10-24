<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        echo "Must be filled";
    } 
    elseif (strlen($password) < 5) {
        echo "Password is at least 5 characters";
    } 
    elseif (!preg_match('/[A-Za-z]/', $password) || !preg_match('/[0-9]/', $password)) {
        echo "Password must consist of letters and numbers.";
    } 
    else {
        $_SESSION['username'] = $username;

        header('Location: home.php');
        exit();
    }
}
?>