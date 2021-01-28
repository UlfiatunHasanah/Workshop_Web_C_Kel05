<?php
require_once "library/koneksi.php";
require_once "library/fungsi_standar.php";
$proses=$_POST['proses'];
$hapus=$_GET['proses'];
$url="";


//fungsi insert
	function insert($nama_tabel,$values,$connect)
	{
		$sql="INSERT INTO ".$nama_tabel." VALUES(".$values.")";
		mysqli_query($connect,$sql);	
		echo mysqli_error($connect);
	}
//fungsi update
	function update($nama_tabel,$values,$kondisi,$connect)
	{
		$sql="UPDATE ".$nama_tabel." SET ".$values." WHERE ".$kondisi;
		mysqli_query($connect,$sql);
		echo mysqli_error($connect);
	}
//fungsi deleteT
	function delete($nama_tabel,$kondisi,$connect)
	{
		$sql="DELETE FROM ".$nama_tabel." WHERE ".$kondisi;
		mysqli_query($connect,$sql);
	}
//pilih fungsi
if($proses){
	switch($proses){ 
		//pemilihan fungsi insert
		case "akun_insert":
		{
			$nama_tabel="account";
			$username=$_POST["username"];
			$password=$_POST["password"];
			$values="'','$username', '$password', '$_POST[nama]', '$_POST[level]'";
			$hal="data_akun";
			insert($nama_tabel,$values,$connect);
			break;
		}
		case "pelajaran_insert":
			{
				$kode=$_POST['pelajaran_Kode'];
				$pelajaranKode=str_ireplace(" ","_",$kode);
				$nama_tabel="pelajaran";
				$values="'$_POST[inc]', '$pelajaranKode', '$_POST[nmpelajaran]', '$_POST[kategori]'";
				$hal="data_pelajaran";
				insert($nama_tabel,$values,$connect);
				break;
			}
			case "kelas_insert":
				{
					$kode=$_POST['kelas_Kode'];
					$kelasKode=str_ireplace(" ","_",$kode);
					$nama_tabel="kelas";
					$values="'$_POST[inc]', '$kelasKode', '$_POST[nmkelas]', '$_POST[nmjurusan]'";
					$hal="data_kelas";
					insert($nama_tabel,$values,$connect);
					break;
				}
			case "jurusan_insert":
			{
				$kode=$_POST['jurusan_Kode'];
				$jurusanKode=str_ireplace(" ","_",$kode);
				$nama_tabel="jurusan";
				$values="'$_POST[inc]', '$jurusanKode', '$_POST[nmjurusan]'";
				$hal="data_jurusan";
				insert($nama_tabel,$values,$connect);
				break;
			}
		case "siswa_insert":
			{	
				$supID=str_ireplace(" ",_,$_POST['siswa_id']);
				$password=md5($supID);
				$nama_tabel="siswa";
				$values="'$_POST[siswa_inc]', '$supID', '$_POST[nmsiswa]', 
				'$_POST[alamatSup]', '$_POST[kotaSup]', '$_POST[emailSup]','$_POST[kontakSup]','$_POST[kelas_id]','$password'";
				$hal="data_siswa";
				insert($nama_tabel,$values,$connect);
				break;
			}
		case "walikelas_insert":
			{	
				$supID=str_ireplace(" ",_,$_POST['walikelas_id']);
				$password=md5($supID);
				$nama_tabel="wali_kelas";
				$values="'$_POST[walikelas_inc]', '$supID', '$_POST[nmwalikelas]', 
				'$_POST[alamatSup]', '$_POST[kotaSup]', '$_POST[emailSup]','$_POST[kontakSup]','$_POST[kelas_id]','$password'";
				$hal="data_wali_kelas";
				insert($nama_tabel,$values,$connect);
				break;
			}
		
		//insert raport
		case "raport_insert":
		{
			
			//insert ke tabel raport
			$raport="INSERT INTO raport(inc, raport_id, tgl_trans, siswa_id,tahunajaran,semester,jurusan)
			VALUES('$_POST[inc]', '$_POST[raport_id]', '$_POST[tgl_trans]','$_POST[pilih_siswa]','$_POST[tahunajaran]','$_POST[semester]','$_POST[jurusan]')";
			mysqli_query($connect,$raport);
			echo mysqli_error();
			//ambil data dari temp_raport_detail
			$tmp="SELECT * FROM temp_raport_detail WHERE raport_id='$_POST[raport_id]'";
			$qtmp=mysqli_query($connect,$tmp);
			while($dtmp=mysqli_fetch_array($qtmp))
			{
				//insert ke tabel raport_detail
				$raport_detail="INSERT INTO raport_detail(raport_id, pelajaran_id, pelajaran_nama, nilai_angka, nilai_huruf)
				VALUES('$dtmp[raport_id]', '$dtmp[pelajaran_id]', '$dtmp[pelajaran_nama]', '$dtmp[nilai_angka]', 
				'$dtmp[nilai_huruf]')";
				mysqli_query($connect,$raport_detail);
				
			}	
			//hapus data temp_raport_detil
			mysqli_query($connect,"DELETE FROM temp_raport_detail WHERE raport_id='$_POST[raport_id]'");
			$hal="raport_detail&id=$_POST[raport_id]";
			break;
		}
		
		//pemilihan fungsi update
		case "pelajaran_update":
			{
				$nama_tabel="pelajaran";
				$values="pelajaran_id='$_POST[pelajaran_Kode]', pelajaran_nama='$_POST[nmpelajaran]', pelajaran_kategori='$_POST[kategori]'";
				$kondisi="inc='$_POST[inc]'";
				$hal="data_pelajaran";
				update($nama_tabel,$values,$kondisi,$connect);
				break;
			}
		case "kelas_update":
			{
				$nama_tabel="kelas";
				$values="kelas_id='$_POST[kelas_Kode]', kelas_nama='$_POST[nmkelas]', Jurusan_id='$_POST[nmjurusan]'";
				$kondisi="kelas_id='$_POST[inc]'";
				$hal="data_kelas";
				update($nama_tabel,$values,$kondisi,$connect);
				break;
			}	
		case "jurusan_update":
			{
				$nama_tabel="jurusan";
				$values="jurusan_id='$_POST[jurusan_Kode]', jurusan_nama='$_POST[nmjurusan]'";
				$kondisi="inc='$_POST[inc]'";
				$hal="data_jurusan";
				update($nama_tabel,$values,$kondisi,$connect);
				break;
			}	
		case "siswa_update":
			{
				$nama_tabel="siswa";
				$values="siswa_nama='$_POST[nmsiswa]', siswa_alamat='$_POST[alamatSup]', 
				siswa_kota='$_POST[kotaSup]', siswa_email='$_POST[emailSup]',siswa_kontak='$_POST[kontakSup]',kelas_id='$_POST[jurusan]'";
				$kondisi="siswa_id='$_POST[siswa_id]'";
				$hal="data_siswa";
				update($nama_tabel,$values,$kondisi,$connect);
				break;
			}
		case "walikelas_update":
			{
				$nama_tabel="wali_kelas";
				$values="walikelas_nama='$_POST[nmwalikelas]', walikelas_alamat='$_POST[alamatSup]', 
				walikelas_kota='$_POST[kotaSup]', walikelas_email='$_POST[emailSup]',walikelas_kontak='$_POST[kontakSup]',kelas_id='$_POST[kelas_id]'";
				$kondisi="walikelas_id='$_POST[walikelas_id]'";
				$hal="data_wali_kelas";
				update($nama_tabel,$values,$kondisi,$connect);
				break;
			}
		case "sekolah_update":
			{
				$nama_tabel="sekolah";
				$values="sekolah_nama='$_POST[nmsekolah]', sekolah_alamat='$_POST[alamatSup]', 
				sekolah_kota='$_POST[kotaSup]', sekolah_email='$_POST[emailSup]', sekolah_kontak='$_POST[kontakSup]'";
				$kondisi="sekolah_id='$_POST[sekolah_id]'";
				$hal="data_sekolah";
				update($nama_tabel,$values,$kondisi,$connect);
				break;
			}
		
		case "ubah_akun":
		{
			$sql="UPDATE account SET nama='$_POST[nama]', level='$_POST[level]' WHERE id='$_POST[username]'";
			mysqli_query($connect,$sql);
			$hal="data_akun";
			break;
		}
	} //end switch
	}


if($hapus){
	switch($hapus){
		//pemilihan fungsi delete
		case "pelajaran_delete":
				{
					$nama_tabel="pelajaran";
					$kondisi="inc='$_GET[id]'";
					$hal="data_pelajaran";
					delete($nama_tabel,$kondisi,$connect);
					break;
				}
		case "jurusan_delete":
				{
					$nama_tabel="jurusan";
					$kondisi="inc='$_GET[id]'";
					$hal="data_jurusan";
					delete($nama_tabel,$kondisi,$connect);
					break;
				}
		case "kelas_delete":
				{
					$nama_tabel="kelas";
					$kondisi="kelas_id='$_GET[id]'";
					$hal="data_kelas";
					delete($nama_tabel,$kondisi,$connect);
					break;
				}		
		case "siswa_delete":
				{
					$nama_tabel="siswa";
					$kondisi="siswa_id='$_GET[id]'";
					$hal="data_siswa";
					delete($nama_tabel,$kondisi,$connect);
					break;
				}
		case "walikelas_delete":
				{
					$nama_tabel="wali_kelas";
					$kondisi="inc='$_GET[id]'";
					$hal="data_wali_kelas";
					delete($nama_tabel,$kondisi,$connect);
					break;
				}
		
		case "hapus_item_raport":
		{
			if ($_GET['status']=="satu"){
				$pesan="DELETE FROM temp_raport_detail WHERE pelajaran_id='$_GET[id]'";
				mysqli_query($connect,$pesan);
			}else{
				$pesan="DELETE FROM temp_raport_detail WHERE raport_id='$_GET[id]'";
				mysqli_query($connect,$pesan);
			}
			$hal="index.php?halaman=form_raport";
			break;
		}

		case "hapus_akun":
		{
			$sql="DELETE FROM account WHERE id='$_GET[id]'";
			mysqli_query($connect,$sql);
			$hal="data_akun";
			break;
		}
	}
}
	if ($url=="transaksi")
	{
		lompat_ke($hal);
	}
	else
	{
		lompat_ke("index.php?halaman=" . $hal);
		//echo mysqli_error($connect);

	}
?>
