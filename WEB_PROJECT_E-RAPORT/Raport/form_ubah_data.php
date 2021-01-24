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
	if($_GET['kode']=="pelajaran_update"){
		$pesan="SELECT * FROM pelajaran WHERE inc='$_GET[id]'";
		$query=mysqli_query($koneksi, $pesan);
		$data=mysqli_fetch_array($query);
		
		
		
	echo "<div class='row-fluid sortable'>
				<div class='box span12'>
					<div class='box-header' data-original-title>
						<h2><i class='halflings-icon edit'></i><span class='break'></span>Form ubah data pelajaran</h2>
						<div class='box-icon'>
							
							<a href='#' class='btn-minimize'><i class='halflings-icon chevron-up'></i></a>
							<a href='#' class='btn-close'><i class='halflings-icon remove'></i></a>
						</div>
					</div>
					<div class='box-content'>
						<form class='form-horizontal'>
						  <fieldset>
						  <input type=hidden name=inc id=inc value=$data[inc] />
						  
							<div class='control-group'>
							<label class='control-label' for='typeahead'>Kode pelajaran </label>
							<div class='controls'>
							
							<input type='text' name=pelajaran_Kode class='span6 typeahead' id='typeahead' value='".$data[pelajaran_id]."'/>
							</div>
							
							<div class='control-group'>
							<label class='control-label' for='typeahead'>Nama pelajaran </label>
							<div class='controls'>
							
							<input type='text' name=nmpelajaran class='span6 typeahead' id='typeahead' value='".$data[pelajaran_nama]."'/>
							</div>
							
							<div class='control-group'>
							<label class='control-label' for='typeahead'>Kategori pelajaran </label>
							<div class='controls'>
							
							<input type='text' name=kategori class='span6 typeahead' id='typeahead' value='".$data[pelajaran_kategori]."'/>
							</div>
							<div class='form-actions'>
							<input type=submit class='btn btn-primary' name=SimpanBar value=Simpan />
							<input type=reset name=BatalBar class='btn' value=Batal />
							 
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->";	
	}

elseif($_GET['kode']=="jurusan_update"){
		$pesan="SELECT * FROM jurusan WHERE inc='$_GET[id]'";
		$query=mysqli_query($koneksi, $pesan);
		$data=mysqli_fetch_array($query);
		
		
		
	echo "<div class='row-fluid sortable'>
				<div class='box span12'>
					<div class='box-header' data-original-title>
						<h2><i class='halflings-icon edit'></i><span class='break'></span>Form ubah data jurusan</h2>
						<div class='box-icon'>
							<a href='#' class='btn-setting'><i class='halflings-icon wrench'></i></a>
							<a href='#' class='btn-minimize'><i class='halflings-icon chevron-up'></i></a>
							<a href='#' class='btn-close'><i class='halflings-icon remove'></i></a>
						</div>
					</div>
					<div class='box-content'>
						<form class='form-horizontal'>
						  <fieldset>
						  <input type=hidden name=inc id=inc value=$data[inc] />
						  
							<div class='control-group'>
							<label class='control-label' for='typeahead'>Kode jurusan </label>
							<div class='controls'>
							
							<input type='text' readonly='yes' name=jurusan_Kode class='span6 typeahead' id='typeahead' value='".$data[jurusan_id]."'/>
							</div>
							
							<div class='control-group'>
							<label class='control-label' for='typeahead'>Nama jurusan </label>
							<div class='controls'>
							
							<input type='text' name=nmjurusan class='span6 typeahead' id='typeahead' value='".$data[jurusan_nama]."'/>
							</div>
							
							
							<div class='form-actions'>
							<input type=submit class='btn btn-primary' name=SimpanBar value=Simpan />
							<input type=reset name=BatalBar class='btn' value=Batal />
							 
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->";	
	}

	elseif($_GET['kode']=="kelas_update"){
		$pesan="SELECT * FROM kelas WHERE inc='$_GET[id]'";
		$query=mysqli_query($koneksi, $pesan);
		$data=mysqli_fetch_array($query);
		
		
		
	echo "<div class='row-fluid sortable'>
				<div class='box span12'>
					<div class='box-header' data-original-title>
						<h2><i class='halflings-icon edit'></i><span class='break'></span>Form ubah data kelas</h2>
						<div class='box-icon'>
							<a href='#' class='btn-setting'><i class='halflings-icon wrench'></i></a>
							<a href='#' class='btn-minimize'><i class='halflings-icon chevron-up'></i></a>
							<a href='#' class='btn-close'><i class='halflings-icon remove'></i></a>
						</div>
					</div>
					<div class='box-content'>
						<form class='form-horizontal'>
						  <fieldset>
						  <input type=hidden name=inc id=inc value=$data[inc] />
						  
							<div class='control-group'>
							<label class='control-label' for='typeahead'>Kode kelas </label>
							<div class='controls'>
							
							<input type='text' readonly='yes' name=kelas_Kode class='span6 typeahead' id='typeahead' value='".$data[kelas_id]."'/>
							</div>
							
							<div class='control-group'>
							<label class='control-label' for='typeahead'>Nama Kelas </label>
							<div class='controls'>
							
							<input type='text' name=nmkelas class='span6 typeahead' id='typeahead' value='".$data[kelas_nama]."'/>
							</div>
							
							
							<div class='form-actions'>
							<input type=submit class='btn btn-primary' name=SimpanBar value=Simpan />
							<input type=reset name=BatalBar class='btn' value=Batal />
							 
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->";	
	}
	elseif($_GET['kode']=="siswa_update"){
		$pesan="SELECT * FROM siswa WHERE siswa_id='$_GET[id]'";
		$query=mysqli_query($koneksi, $pesan);
		$data=mysqli_fetch_array($query);
	echo "<div class='row-fluid sortable'>
				<div class='box span12'>
					<div class='box-header' data-original-title>
						<h2><i class='halflings-icon edit'></i><span class='break'></span>Form Ubah data siswa </h2>
						<div class='box-icon'>
							<a href='#' class='btn-setting'><i class='halflings-icon wrench'></i></a>
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
							<select name='jurusan' class='span6' typeahead'id='selectError' data-rel='chosen'>";
					$tampil=mysqli_query($koneksi, "SELECT * FROM jurusan ORDER BY jurusan_id");
						if ($data[jurusan_id]==0){
					echo "<option value=0 selected>- Pilih Jurusan -</option>";}   

					while($w=mysqli_fetch_array($tampil)){
					if ($data[jurusan_id]==$w[jurusan_id]){
              echo "<option value=$w[jurusan_id] selected>$w[jurusan_nama]</option>";}
            else{
              echo "<option value=$w[jurusan_id]>$w[jurusan_nama]</option>";
            }
          }
									
								  echo"</select>
							</div>
							
							
							
							<div class='form-actions'>
							<input type=submit class='btn btn-primary' name=SimpanSup value=Simpan />
							<input type=reset name=BatalSup class='btn' value=Batal />
							 
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->";
	}
	elseif($_GET['kode']=="walikelas_update"){
		$pesan="SELECT * FROM walikelas WHERE walikelas_id='$_GET[id]'";
		$query=mysqli_query($koneksi, $pesan);
		$data=mysqli_fetch_array($query);
	echo "<div class='row-fluid sortable'>
				<div class='box span12'>
					<div class='box-header' data-original-title>
						<h2><i class='halflings-icon edit'></i><span class='break'></span>Form Ubah data walikelas </h2>
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
							<label class='control-label' for='typeahead'>Kontak Wali Kelas </label>
							<div class='controls'>
							
							<input type='text' name=kontakSup class='span6 typeahead' id='typeahead' value='".$data[walikelas_kontak]."'>
							</div>
							
							<div class='control-group'>
							<label class='control-label' for='typeahead'>Kelas </label>
							<div class='controls'>
							<select name='kelas' class='span6' typeahead'id='selectError' data-rel='chosen'>";
					$tampil=mysqli_query($koneksi, "SELECT * FROM kelas ORDER BY kelas_id");
						if ($data[kelas_id]==0){
					echo "<option value=0 selected>- Pilih Kelas-</option>";}   

					while($w=mysqli_fetch_array($tampil)){
					if ($data[kelas_id]==$w[kelas_id]){
              echo "<option value=$w[kelas_id] selected>$w[kelas_nama]</option>";}
            else{
              echo "<option value=$w[kelas_id]>$w[kelas_nama]</option>";
            }
          }
									
								  echo"</select>
							</div>
							
							
							
							<div class='form-actions'>
							<input type=submit class='btn btn-primary' name=SimpanSup value=Simpan />
							<input type=reset name=BatalSup class='btn' value=Batal />
							 
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->";
	}
	elseif($_GET['kode']=="sekolah_update"){
		$pesan="SELECT * FROM sekolah WHERE sekolah_id='$_GET[id]'";
		$query=mysqli_query($koneksi, $pesan);
		$data=mysqli_fetch_array($query);
	echo "<div class='row-fluid sortable'>
				<div class='box span12'>
					<div class='box-header' data-original-title>
						<h2><i class='halflings-icon edit'></i><span class='break'></span>Form Ubah data sekolah </h2>
						<div class='box-icon'>
							<a href='#' class='btn-setting'><i class='halflings-icon wrench'></i></a>
							<a href='#' class='btn-minimize'><i class='halflings-icon chevron-up'></i></a>
							<a href='#' class='btn-close'><i class='halflings-icon remove'></i></a>
						</div>
					</div>
					<div class='box-content'>
						<form class='form-horizontal'>
						  <fieldset>
						  <input type=hidden name=sekolah_id id=sekolah_id value='".$data[sekolah_id]."' />
						  
							<div class='control-group'>
							<label class='control-label' for='typeahead'>Kode Suplier </label>
							<div class='controls'>
							
							<input type='text' name=sekolah_id class='span6 typeahead' id='typeahead' value='".$data[sekolah_id]."'>
							</div>
							
							<div class='control-group'>
							<label class='control-label' for='typeahead'>Nama sekolah </label>
							<div class='controls'>
							
							<input type='text' name=nmsekolah class='span6 typeahead' id='typeahead' value='".$data[sekolah_nama]."'>
							</div>
							
							<div class='control-group'>
							<label class='control-label' for='typeahead'>Alamat sekolah </label>
							<div class='controls'>
							
							<input type='text' name=alamatSup class='span6 typeahead' id='typeahead' value='".$data[sekolah_alamat]."'>
							</div>
							
							<div class='control-group'>
							<label class='control-label' for='typeahead'>Kota sekolah </label>
							<div class='controls'>
							
							<input type='text' name=kotaSup class='span6 typeahead' id='typeahead' value='".$data[sekolah_kota]."'>
							</div>
							
							<div class='control-group'>
							<label class='control-label' for='typeahead'>Email sekolah </label>
							<div class='controls'>
							
							<input type='text' name=emailSup class='span6 typeahead' id='typeahead' value='".$data[sekolah_email]."'>
							</div>
							
							<div class='control-group'>
							<label class='control-label' for='typeahead'>Kontak sekolah </label>
							<div class='controls'>
							
							<input type='text' name=kontakSup class='span6 typeahead' id='typeahead' value='".$data[sekolah_kontak]."'>
							</div>
							
							
							
							<div class='form-actions'>
							<input type=submit class='btn btn-primary' name=SimpanSup value=Simpan />
							<input type=reset name=BatalSup class='btn' value=Batal />
							 
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->";
	}
	echo "</form>";
?>