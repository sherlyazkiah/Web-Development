<?php
$host       = "LAPTOP-U2DD22BG\SQLEXPRESS";

$connInfo   = array("Database" => "PrakwebDB", "UID" => "", "PWD" => "");
$conn       = sqlsrv_connect($host, $connInfo);

if ($conn) {
    echo "Koneksi berhasil.<br />";
} else {
    echo "Koneksi Gagal";
        die(print_r(sqlsrv_errors(), true));
}
?>