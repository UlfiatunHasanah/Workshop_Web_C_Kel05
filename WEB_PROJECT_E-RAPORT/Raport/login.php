<?php
// memulai session
session_start();
require_once "library/koneksi.php";
require_once "library/fungsi_standar.php";

$username = $_POST["username"];

$password = $_POST["password"];

var_dump($username); echo "<br>";
var_dump($password); echo "<br>";


// query untuk mendapatkan record dari username

$query = "SELECT * FROM account WHERE username = '$username'";

$hasil = mysqli_query($connect,$query);

$data = mysqli_fetch_array($hasil);
var_dump($data);
// cek kesesuaian password
echo mysqli_error($connect);

if ($username == $data['username'])
{

	if ($password == $data['password']) {
		// menyimpan username dan level ke dalam session
	
		$_SESSION['level'] = $data['level'];
		$_SESSION['username'] = $data['username'];
		$_SESSION['nama'] = $data['nama'];
	
		// tampilkan menu
		lompat_ke("index.php");
	}else{
		echo "Gagal";
	}

}
else
{
	//lompat_ke("form_login.php");
	echo mysqli_error($connect);
}


?>
