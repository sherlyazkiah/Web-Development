<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];

    echo "Nmaa: " . $nama . "<br>";
    echo "Email: " . $email;
}
?>