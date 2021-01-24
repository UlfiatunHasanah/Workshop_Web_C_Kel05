<?php

// definisikan koneksi ke database
$server = "ftp.wsjti.com";
$username = "u1011496_raport";
$password = "eraport2020";
$database = "u1011496_report_online_jur_sis";

// Koneksi dan memilih database di server
$koneksi = mysqli_connect($server,$username,$password,$database) or die("Koneksi gagal");


?>
