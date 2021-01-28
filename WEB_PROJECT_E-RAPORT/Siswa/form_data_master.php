<?php
require_once "library/koneksi.php";
require_once "library/fungsi_standar.php";

	echo "
	<form id=formID name=formInput method=post action=proses.php>
	  <input type=hidden name=proses id=proses value=$_GET[kode] />";
//form data pelajaran
	if ($_GET['kode']=="pelajaran_insert"){
		//pemanggilan fungsi penambahan
		$a="SELECT * FROM pelajaran";
		$b="SELECT inc FROM pelajaran ORDER BY inc DESC LIMIT 1";
		$inc=penambahan($a, $b);
	echo "<div class='row-fluid sortable'>
				<div class='box span12'>
					<div class='box-header' data-original-title>
						<h2><i class='halflings-icon edit'></i><span class='break'></span>Form input data pelajaran</h2>
						<div class='box-icon'>
							<a href='#' class='btn-setting'><i class='halflings-icon wrench'></i></a>
							<a href='#' class='btn-minimize'><i class='halflings-icon chevron-up'></i></a>
							<a href='#' class='btn-close'><i class='halflings-icon remove'></i></a>
						</div>
					</div>
					<div class='box-content'>
						<form class='form-horizontal'>
						  <fieldset>
						  <input type=hidden name=inc id=inc value=$inc />
						  
							<div class='control-group'>
							<label class='control-label' for='typeahead'>Kode pelajaran </label>
							<div class='controls'>
							
							<input type='text' name=pelajaran_Kode class='span6 typeahead' id='typeahead' value='KODE-$inc'>
							</div>
							
							<div class='control-group'>
							<label class='control-label' for='typeahead'>Nama pelajaran </label>
							<div class='controls'>
							
							<input type='text' name=nmpelajaran class='span6 typeahead' id='typeahead'>
							</div>
							
							<div class='control-group'>
							<label class='control-label' for='typeahead'>Kategori pelajaran </label>
							<div class='controls'>
							
							<input type='text' name=kategori class='span6 typeahead' id='typeahead'>
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
	
	elseif ($_GET['kode']=="jurusan_insert"){
		//pemanggilan fungsi penambahan
		$a="SELECT * FROM jurusan";
		$b="SELECT inc FROM jurusan ORDER BY inc DESC LIMIT 1";
		$inc=penambahan($a, $b);
	echo "<div class='row-fluid sortable'>
				<div class='box span12'>
					<div class='box-header' data-original-title>
						<h2><i class='halflings-icon edit'></i><span class='break'></span>Form input data jurusan</h2>
						<div class='box-icon'>
							<a href='#' class='btn-setting'><i class='halflings-icon wrench'></i></a>
							<a href='#' class='btn-minimize'><i class='halflings-icon chevron-up'></i></a>
							<a href='#' class='btn-close'><i class='halflings-icon remove'></i></a>
						</div>
					</div>
					<div class='box-content'>
						<form class='form-horizontal'>
						  <fieldset>
						  <input type=hidden name=inc id=inc value=$inc />
						  
							<div class='control-group'>
							<label class='control-label' for='typeahead'>Kode jurusan </label>
							<div class='controls'>
							
							<input type='text' name=jurusan_Kode class='span6 typeahead' id='typeahead' value='JUR-$inc'>
							</div>
							
							<div class='control-group'>
							<label class='control-label' for='typeahead'>Nama jurusan </label>
							<div class='controls'>
							
							<input type='text' name=nmjurusan class='span6 typeahead' id='typeahead'>
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
//form data siswa
	elseif($_GET['kode']=="siswa_insert"){
		//pemanggilan fungsi penambahan
		$a="SELECT * FROM siswa";
		$b="SELECT inc FROM siswa ORDER BY inc DESC LIMIT 1";
		$inc=penambahan($a, $b);
    echo "<div class='row-fluid sortable'>
				<div class='box span12'>
					<div class='box-header' data-original-title>
						<h2><i class='halflings-icon edit'></i><span class='break'></span>Form input data siswa </h2>
						<div class='box-icon'>
							<a href='#' class='btn-setting'><i class='halflings-icon wrench'></i></a>
							<a href='#' class='btn-minimize'><i class='halflings-icon chevron-up'></i></a>
							<a href='#' class='btn-close'><i class='halflings-icon remove'></i></a>
						</div>
					</div>
					<div class='box-content'>
						<form class='form-horizontal'>
						  <fieldset>
						  <input type=hidden name=siswa_inc id=siswa_inc value=$inc />
						  
							<div class='control-group'>
							<label class='control-label' for='typeahead'>Kode Siswa </label>
							<div class='controls'>
							
							<input type='text' name=siswa_id class='span6 typeahead' id='typeahead' value='SISWA-$inc'>
							</div>
							
							<div class='control-group'>
							<label class='control-label' for='typeahead'>Nama siswa </label>
							<div class='controls'>
							
							<input type='text' name=nmsiswa class='span6 typeahead' id='typeahead'>
							</div>
							
							<div class='control-group'>
							<label class='control-label' for='typeahead'>Alamat siswa </label>
							<div class='controls'>
							
							<input type='text' name=alamatSup class='span6 typeahead' id='typeahead'>
							</div>
							
							<div class='control-group'>
							<label class='control-label' for='typeahead'>Kota siswa </label>
							<div class='controls'>
							
							<input type='text' name=kotaSup class='span6 typeahead' id='typeahead'>
							</div>
							
							<div class='control-group'>
							<label class='control-label' for='typeahead'>Email siswa </label>
							<div class='controls'>
							
							<input type='text' name=emailSup class='span6 typeahead' id='typeahead'>
							</div>
							
							<div class='control-group'>
							<label class='control-label' for='typeahead'>Kontak siswa </label>
							<div class='controls'>
							
							<input type='text' name=kontakSup class='span6 typeahead' id='typeahead'>
							</div>
							
							<div class='control-group'>
							<label class='control-label' for='typeahead'>Jurusan </label>
							<div class='controls'>";
							?>
							<select name="pilih_jurusan" data-placeholder="" id="selectError2" data-rel="chosen">
    			
                  <?php
						$jurusan="SELECT * FROM jurusan ORDER BY jurusan_id ASC";
						$qjurusan=mysqli_query($connect,$jurusan);
						while($djurusan=mysqli_fetch_array($qjurusan))
						{
							echo "<option value='$djurusan[jurusan_id]'>$djurusan[jurusan_nama]</option>";
						}
					?>
  			      </select>
							<?php
							
							echo"</div>
							
							
							
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
     echo " </form>";

?>