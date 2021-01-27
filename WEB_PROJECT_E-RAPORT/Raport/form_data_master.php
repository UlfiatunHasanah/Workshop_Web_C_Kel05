<?php
require_once "library/koneksi.php";
require_once "library/fungsi_standar.php";

	echo "
	<form id=formID name=formInput method=post action=proses.php>
	  <input type=hidden name=proses id=proses value=$_GET[kode] />";
//form data pelajaran
	if ($_GET['kode']=="pelajaran_insert"){
		//pemanggilan fungsi penambahan
		$getId = mysqli_query($connect, "SELECT count(inc) as id FROM pelajaran");
		$data = mysqli_fetch_array($getId);
		$lastId = $data['id'];
		$inc = $lastId + 1;
	echo "<div class='row-fluid sortable'>
				<div class='box span12'>
					<div class='box-header' data-original-title>
						<h2><i class='halflings-icon edit'></i><span class='break'></span>Form input data pelajaran</h2>
						<div class='box-icon'>
							
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
							
							<input type='text' name=kategori class='span6 typeahead' id='typeahead'/>
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
		$getId = mysqli_query($connect, "SELECT count(inc) as id FROM jurusan");
		$data = mysqli_fetch_array($getId);
		$lastId = $data['id'];
		$inc = $lastId + 1;
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
							<a href='../raport/index.php?halaman=data_jurusan'><button type='button' name=BatalBar class='btn btn-default' value=Batal />Batal</a>
							 
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->";
	}
	elseif ($_GET['kode']=="kelas_insert"){
		//pemanggilan fungsi penambahan
		$getId = mysqli_query($connect, "SELECT count(inc) as id FROM kelas");
		$data = mysqli_fetch_array($getId);
		$lastId = $data['id'];
		$inc = $lastId + 1;
	echo "<div class='row-fluid sortable'>
				<div class='box span12'>
					<div class='box-header' data-original-title>
						<h2><i class='halflings-icon edit'></i><span class='break'></span>Form input data kelas</h2>
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
							
							<input type='text' readonly='yes' name=kelas_Kode class='span6 typeahead' id='typeahead' value='KELAS-$inc'/>
							</div>
							
							<div class='control-group'>
							<label class='control-label' for='typeahead'>Nama Kelas </label>
							<div class='controls'>
							
							<input type='text' name=nmkelas class='span6 typeahead' id='typeahead' value='".$data[kelas_nama]."'/>
							</div>

							<div class='control-group'>
							<label class='control-label' for='typeahead'>Nama Jurusan </label>
							<div class='controls'>
							
							
							<select name='nmjurusan' class='span6' typeahead'id='selectError' data-rel='chosen' value='".$data[jurusan_nama]."'>";
					$tampil=mysqli_query($connect,"SELECT * FROM jurusan ORDER BY jurusan_nama");
						if ($data[jurusan_id]==0){
					echo "<option value=0 selected>- Pilih Jurusan-</option>";}   

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
		$getId = mysqli_query($connect, "SELECT count(inc) as id FROM siswa");
		$data = mysqli_fetch_array($getId);
		$lastId = $data['id'];
		$inc = $lastId + 1;
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
							<label class='control-label' for='typeahead'>Kelas </label>
							<div class='controls'>";
							?>
							<select name="kelas_id" data-placeholder="" id="selectError2" data-rel="chosen">
    			
                  <?php
						$jurusan="SELECT * FROM kelas ORDER BY kelas_id ASC";
						$qjurusan=mysqli_query($connect,$jurusan);
						while($djurusan=mysqli_fetch_array($qjurusan))
						{
							echo "<option value='$djurusan[kelas_id]'>$djurusan[kelas_id]</option>";
						}
					?>
  			      </select>
							<?php
							
							echo"</div>
							
							
							
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
//form data wali kelas
	elseif($_GET['kode']=="walikelas_insert"){
		//pemanggilan fungsi penambahan
		$getId = mysqli_query($connect, "SELECT count(inc) as id FROM wali_kelas");
		$data = mysqli_fetch_array($getId);
		$lastId = $data['id'];
		$inc = $lastId + 1;
    echo "<div class='row-fluid sortable'>
				<div class='box span12'>
					<div class='box-header' data-original-title>
						<h2><i class='halflings-icon edit'></i><span class='break'></span>Form input data wali kelas</h2>
						<div class='box-icon'>
							
							<a href='#' class='btn-minimize'><i class='halflings-icon chevron-up'></i></a>
							<a href='#' class='btn-close'><i class='halflings-icon remove'></i></a>
						</div>
					</div>
					<div class='box-content'>
						<form class='form-horizontal'>
						  <fieldset>
						  <input type=hidden name=walikelas_inc id=walikelas_inc value=$inc />
						  
							<div class='control-group'>
							<label class='control-label' for='typeahead'>Kode Wali Kelas</label>
							<div class='controls'>
							
							<input type='text' name=walikelas_id class='span6 typeahead' id='typeahead' value='WALIKELAS-$inc'>
							</div>
							
							<div class='control-group'>
							<label class='control-label' for='typeahead'>Nama Wali Kelas</label>
							<div class='controls'>
							
							<input type='text' name=nmwalikelas class='span6 typeahead' id='typeahead'>
							</div>
							
							<div class='control-group'>
							<label class='control-label' for='typeahead'>Alamat Wali Kelas</label>
							<div class='controls'>
							
							<input type='text' name=alamatSup class='span6 typeahead' id='typeahead'>
							</div>
							
							<div class='control-group'>
							<label class='control-label' for='typeahead'>Kota Wali Kelas </label>
							<div class='controls'>
							
							<input type='text' name=kotaSup class='span6 typeahead' id='typeahead'>
							</div>
							
							<div class='control-group'>
							<label class='control-label' for='typeahead'>Email Wali Kelas </label>
							<div class='controls'>
							
							<input type='text' name=emailSup class='span6 typeahead' id='typeahead'>
							</div>
							
							<div class='control-group'>
							<label class='control-label' for='typeahead'>Kontak Wali Kelas </label>
							<div class='controls'>
							
							<input type='text' name=kontakSup class='span6 typeahead' id='typeahead'>
							</div>
							
							<div class='control-group'>
							<label class='control-label' for='typeahead'>Kelas ID</label>
							<div class='controls'>";
							?>
							<select name="kelas_id" data-placeholder="" id="selectError2" data-rel="chosen">
    			
                  <?php
						$kelas="SELECT * FROM kelas ORDER BY kelas_id ASC";
						$qkelas=mysqli_query($connect,$kelas);
						while($dkelas=mysqli_fetch_array($qkelas))
						{
							echo "<option value='$dkelas[kelas_id]'>$dkelas[kelas_id]</option>";
						}
					?>
  			      </select>
							<?php
							
							echo"</div>
							
							
							
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
     echo " </form>";

?>
