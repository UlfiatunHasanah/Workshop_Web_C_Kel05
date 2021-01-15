<?php

// definisikan koneksi ke database
$server = "localhost";
$username = "root";
$password = "";
$database = "report_online_jur_sis";

// Koneksi dan memilih database di server
mysqli_connect($server,$username,$password) or die("Koneksi gagal");
mysqli_select_db($database) or die("Database tidak bisa dibuka");

?>
