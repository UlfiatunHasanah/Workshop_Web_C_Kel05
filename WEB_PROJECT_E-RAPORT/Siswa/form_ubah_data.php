<style type="text/css">
td{
	border:none;
}

#input{
	height:20px;
	border:1px solid #c0d3e2;
}
</style>


<?php
require_once "library/koneksi.php";
require_once "library/fungsi_standar.php";

	echo "
	<form id=formUbahData name=formUbahData method=post action=proses.php>
	<input type=hidden name=proses id=proses value=$_GET[kode] />";

	if($_GET['kode']=="siswa_update"){
		$pesan="SELECT * FROM siswa WHERE siswa_id='$_GET[id]'";
		$query=mysqli_query($koneksi, $pesan);
		$data=mysqli_fetch_array($query);
		
		$c=mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM jurusan WHERE jurusan_id='$data[jurusan_id]'"));
		
  
		
	echo "<div class='row-fluid sortable'>
				<div class='box span12'>
					<div class='box-header' data-original-title>
						<h2><i class='halflings-icon edit'></i><span class='break'></span>Data $_SESSION[siswa_nama]</h2>
						<div class='box-icon'>
							
							<a href='#' class='btn-minimize'><i class='halflings-icon chevron-up'></i></a>
							<a href='#' class='btn-close'><i class='halflings-icon remove'></i></a>
						</div>
					</div>
					<div class='box-content'>
						<form class='form-horizontal'>
						  <fieldset>
						  <input type=hidden name=siswa_id id=siswa_id value='".$data[siswa_id]."' />
						  
							<div class='control-group'>
							<label class='control-label' for='typeahead'>Kode Suplier </label>
							<div class='controls'>
							
							<input type='text' name=siswa_id class='span6 typeahead' id='typeahead' value='".$data[siswa_id]."'>
							</div>
							
							<div class='control-group'>
							<label class='control-label' for='typeahead'>Nama siswa </label>
							<div class='controls'>
							
							<input type='text' name=nmsiswa class='span6 typeahead' id='typeahead' value='".$data[siswa_nama]."'>
							</div>
							
							<div class='control-group'>
							<label class='control-label' for='typeahead'>Alamat siswa </label>
							<div class='controls'>
							
							<input type='text' name=alamatSup class='span6 typeahead' id='typeahead' value='".$data[siswa_alamat]."'>
							</div>
							
							<div class='control-group'>
							<label class='control-label' for='typeahead'>Kota siswa </label>
							<div class='controls'>
							
							<input type='text' name=kotaSup class='span6 typeahead' id='typeahead' value='".$data[siswa_kota]."'>
							</div>
							
							<div class='control-group'>
							<label class='control-label' for='typeahead'>Email siswa </label>
							<div class='controls'>
							
							<input type='text' name=emailSup class='span6 typeahead' id='typeahead' value='".$data[siswa_email]."'>
							</div>
							
							<div class='control-group'>
							<label class='control-label' for='typeahead'>Kontak siswa </label>
							<div class='controls'>
							
							<input type='text' name=kontakSup class='span6 typeahead' id='typeahead' value='".$data[siswa_kontak]."'>
							</div>
							
							<div class='control-group'>
							<label class='control-label' for='typeahead'>Jurusan </label>
							<div class='controls'>
							<input type='text' name=jurusan class='span6 typeahead' id='typeahead' value='".$c[jurusan_nama]."'>
							
							
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->";
	}
	
	echo "</form>";
?>