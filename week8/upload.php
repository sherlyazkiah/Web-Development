<?php
if (isset($_POST["submit"])) {
    $targetdir = "uploads/"; // Directory where the file will be saved
    $targetfile = $targetdir . basename($_FILES["myfile"]["name"]);

    if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $targetfile)) {
        echo "File berhasil diunggah.";
    } else {
        echo "Gagal mengunggah file.";
    }
}
?>