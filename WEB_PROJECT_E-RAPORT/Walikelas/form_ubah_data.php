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

	if($_GET['kode']=="walikelas_update"){
		$pesan="SELECT * FROM wali_kelas WHERE walikelas_id='$_GET[id]'";
		$query=mysqli_query($koneksi, $pesan);
		$data=mysqli_fetch_array($query);
		
		$c=mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM kelas WHERE kelas_id='$data[kelas_id]'"));
		
  
		
	echo "<div class='row-fluid sortable'>
				<div class='box span12'>
					<div class='box-header' data-original-title>
						<h2><i class='halflings-icon edit'></i><span class='break'></span>Data $_SESSION[walikelas_nama]</h2>
						<div class='box-icon'>
							
							<a href='#' class='btn-minimize'><i class='halflings-icon chevron-up'></i></a>
							<a href='#' class='btn-close'><i class='halflings-icon remove'></i></a>
						</div>
					</div>
					<div class='box-content'>
						<form class='form-horizontal'>
						  <fieldset>
						  <input type=hidden name=walikelas_id id=walikelas_id value='".$data[walikelas_id]."' />
						  
							<div class='control-group'>
							<label class='control-label' for='typeahead'>Kode Suplier </label>
							<div class='controls'>
							
							<input type='text' name=walikelas_id class='span6 typeahead' id='typeahead' value='".$data[walikelas_id]."'>
							</div>
							
							<div class='control-group'>
							<label class='control-label' for='typeahead'>Nama Wali Kelas </label>
							<div class='controls'>
							
							<input type='text' name=nmwalikelas class='span6 typeahead' id='typeahead' value='".$data[walikelas_nama]."'>
							</div>
							
							<div class='control-group'>
							<label class='control-label' for='typeahead'>Alamat Wali Kelas </label>
							<div class='controls'>
							
							<input type='text' name=alamatSup class='span6 typeahead' id='typeahead' value='".$data[walikelas_alamat]."'>
							</div>
							
							<div class='control-group'>
							<label class='control-label' for='typeahead'>Kota Wali Kelas </label>
							<div class='controls'>
							
							<input type='text' name=kotaSup class='span6 typeahead' id='typeahead' value='".$data[walikelas_kota]."'>
							</div>
							
							<div class='control-group'>
							<label class='control-label' for='typeahead'>Email Wali Kelas </label>
							<div class='controls'>
							
							<input type='text' name=emailSup class='span6 typeahead' id='typeahead' value='".$data[walikelas_email]."'>
							</div>
							
							<div class='control-group'>
							<label class='control-label' for='typeahead'>Kontak Wali Kelas</label>
							<div class='controls'>
							
							<input type='text' name=kontakSup class='span6 typeahead' id='typeahead' value='".$data[walikelas_kontak]."'>
							</div>
							
							<div class='control-group'>
							<label class='control-label' for='typeahead'>Kelas </label>
							<div class='controls'>
							<input type='text' name=kelas class='span6 typeahead' id='typeahead' value='".$c[kelas_nama]."'>
							
							
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->";
	}
	
	echo "</form>";
?>