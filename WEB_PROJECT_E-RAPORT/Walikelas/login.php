<?php
// memulai session
session_start();
require_once "library/koneksi.php";
require_once "library/fungsi_standar.php";

$wali_kelas= $_POST["wali_kelas"];
$password = md5($_POST["password"]);


// query untuk mendapatkan record dari siswa_id

$query = "SELECT * FROM wali_kelas WHERE walikelas_id = '$wali_kelas'";
$hasil = mysqli_query($connect,$query);
$data = mysqli_fetch_array($hasil);

// cek kesesuaian password
//and($password == $data['password'])
if (($wali_kelas == $data['walikelas_id']))
{
	// menyimpan walikelas_id dan level ke dalam session
	$_SESSION['wali_kelas'] = $data['walikelas_id'];
	$_SESSION['kelas_id'] = $data['kelas_id'];
	$_SESSION['walikelas_nama'] = $data['walikelas_nama'];
	
	// tampilkan menu
	lompat_ke("index.php");

}
else
{
	
}

?>
