<?php
$pesan = "saya arek malang";
# ubah variabel $pesan menjadi array dengan perintah explode
$pesanPerkata = explode(" ", $pesan);
# ubah setiap kata dalam array menjadi kebalikannya
$pesanPerKata = array_map(fn($pesan) => strrev($pesan), $pesanPerkata);
#gabungkan kembali array menjadi string
$pesan = implode(" ", $pesanPerKata);
echo $pesan . "<br>";
?>