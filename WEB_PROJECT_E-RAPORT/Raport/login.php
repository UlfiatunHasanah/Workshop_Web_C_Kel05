<?php
// memulai session
session_start();
require_once "library/koneksi.php";
require_once "library/fungsi_standar.php";

$siswa = $_POST["siswa"];
$password = md5($_POST["password"]);


// query untuk mendapatkan record dari siswa_id

$query = "SELECT * FROM siswa WHERE siswa_id = '$siswa'";
$hasil = mysql_query($query);
$data = mysql_fetch_array($hasil);

// cek kesesuaian password
//and($password == $data['password'])
if (($siswa == $data['siswa_id']))
{
	// menyimpan siswa_id dan level ke dalam session
	$_SESSION['siswa'] = $data['siswa_id'];
	$_SESSION['siswa_nama'] = $data['siswa_nama'];
	
	// tampilkan menu
	lompat_ke("index.php");

}
else
{
	lompat_ke("form_login.php");
}

?>
