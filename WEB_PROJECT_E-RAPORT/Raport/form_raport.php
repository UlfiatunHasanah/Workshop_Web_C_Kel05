<?php
require_once "library/koneksi.php";
require_once "library/fungsi_standar.php";

$a="SELECT * FROM raport";
$b="SELECT inc FROM raport ORDER BY inc DESC LIMIT 1";
$inc=penambahan($a, $b);
if (isset($_POST['proses'])and($_POST['proses']=="form2"))
{
	if (!empty($_POST['nilai_angka'])and(!empty($_POST['harga'])))
	{
		$buah="SELECT * FROM pelajaran WHERE pelajaran_nama='$_POST[pilih_pelajaran]'";
		$qbuah=mysqli_query($koneksi, $buah);
		$dbuah=mysqli_fetch_array($qbuah);
		
		//insert ke temp_raport_detail
		$harga_total=$_POST['nilai_angka']*$_POST['harga'];
		$input="INSERT INTO temp_raport_detail(raport_id, pelajaran_id, pelajaran_nama, nilai_angka, nilai_huruf)
		VALUES('RAPORT-$inc', '$dbuah[pelajaran_id]', '$_POST[pilih_pelajaran]', '$_POST[nilai_angka]', '$_POST[harga]')";
		mysqli_query($koneksi, $input);
		$hal="index.php?halaman=form_raport";
	}
}
?>

		
	<!-- end: JavaScript-->
        <script>
            jQuery(document).ready( function() {
                // binds form submission and fields to the validation engine
                jQuery("#formID").validationEngine();
            });
			///
				
        </script>


<div class="row-fluid">	
				<div class="box span12">
					
					<div class="box-header">
						<h2><i class="halflings-icon bell"></i><span class="break"></span>Pilih Mata Pelajaran</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
					
		<div class="alert alert-block">
							<button type="button" class="close" data-dismiss="alert">×</button>
							<h4 class="alert-heading">Perhatian</h4>
							<p>Pilihlah Mata pelajaran dibawah</p>
						</div>
						
						<p>
							<button class="btn btn-small btn-success"><i class="halflings-icon white star"></i> A = Sangat Baik</button>
							<button class="btn btn-small btn-primary"> B = Baik</button>
							<button class="btn btn-small btn-warning"> C = Cukup</button>
							<button class="btn btn-small btn-danger"> D = Buruk</button>
							
						</p>
						
		<fieldset>
		<form id="formID"  name="form2" method="post" action="index.php?halaman=form_raport">
        <input name="proses" type="hidden" value="form2" />
        <table class="table table-bordered table-striped table-condensed">
  			<tr>
    			<td>Nama pelajaran</td>
    			<td>Angka</td>
    			<td>Huruf</td>
    			<td>Menu</td>
  			</tr>
  			<tr>
    			<td>
				<select name="pilih_pelajaran" data-placeholder="" id="selectError2" data-rel="chosen">
    			
                  <?php
						$pelajaran="SELECT * FROM pelajaran ORDER BY pelajaran_id ASC";
						$qpelajaran=mysqli_query($koneksi, $pelajaran);
						while($dpelajaran=mysqli_fetch_array($qpelajaran))
						{
							echo "<option>$dpelajaran[pelajaran_nama]</option>";
						}
					?>
  			      </select>
  			  	</td>
    			<td>
				<div class="controls">
								  <select name="nilai_angka" id="selectError3">
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
									<option>6</option>
									<option>7</option>
									<option>8</option>
									<option>9</option>
									<option>10</option>
								  </select>
								</div>
  			  	</td>
    			<td>
				<select id="selectError3" name="harga">
									<option>A</option>
									<option>B</option>
									<option>C</option>
									<option>D</option>
									<option>E</option>
								
								  </select>
				</td>
   				<td><label>
				 <input type="submit" name="add" id="tombol" value="add" />
   				 
			    </label></td>
  			</tr>
			</table>
	  </form>
	  </fieldset>

</div>
					
				</div><!--/span-->
			</div><!--/row-->
			
			<hr>
			
			
			
<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Form Elements</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
					
					<form class="form-horizontal" id="form1" name="form1" method="post" action="proses.php">
					<input name="proses" type="hidden" value="raport_insert" />
					<input name="inc" type="hidden" value="<?php echo "$inc"; ?>" />
							<fieldset>
							  
							   
							 
						<table class="table table-bordered table-striped table-condensed">
							  <thead>
								  <tr>
									  <th>Kode Pelajaran</th>
									  <th>Nama Pelajaran</th>
									  <th>Angka</th>
									  <th>Huruf</th>
									  <th>
				<?php echo "<a href=proses.php?proses=hapus_item_raport&status=all&id=RAPORT-$inc><div id=tombol>Hapus Semua</div></a>"; ?>
                </th>									  
								  </tr>
							  </thead>   
							  <tbody>
							   <?php
			  	$rinci="SELECT * FROM temp_raport_detail WHERE raport_id='RAPORT-$inc'";
				$qrinci=mysqli_query($koneksi, $rinci);
				while($drinci=mysqli_fetch_array($qrinci))
				{
			  ?>
				<tr>
                <td><?php echo $drinci['pelajaran_id']; ?></td>
                <td><?php echo $drinci['pelajaran_nama']; ?></td>
                <td><?php echo $drinci['nilai_angka']; ?></td>
                <td align="right"><?php echo digit($drinci['nilai_huruf']); ?></td>
               <td><?php echo "<a href=proses.php?proses=hapus_item_raport&status=satu&id=$drinci[pelajaran_id]><div id=tombol>hapus</div></a>"; ?></td>
              </tr>
			   <?php } ?>
			    <tr>
                <td style="color:#FFF; background-color:#333; border:none" colspan="2" align="right">total :</td>
                <td style="color:#FFF; background-color:#333; border:none" align="right">
					<?php
						$sum="SELECT SUM(nilai_angka)AS total FROM temp_raport_detail WHERE raport_id='RAPORT-$inc'";
						$qsum=mysqli_query($koneksi, $sum);
						$dsum=mysqli_fetch_array($qsum);
						echo digit($dsum['total']);
					?>
                </td>
                <td style="color:#FFF; background-color:#333; border:none">&nbsp;</td>
                <td style="color:#FFF; background-color:#333; border:none">&nbsp;</td>
              </tr>
								                                  
							  </tbody>
						 </table> 


<div class="control-group">
								<label class="control-label" for="disabledInput">No. Raport</label>
								<div class="controls">
								  <input name="raport_id" type="text" value="<?php echo "RAPORT-$inc"; ?>" readonly="true"/>
								</div>
							  </div>
							  
							  <div class="control-group">
								<label class="control-label">Tanggal Input</label>
								<div class="controls">
								  <input name="tgl_trans" type="text" id="datepicker" value="<?php echo date(d)."/".date(m)."/".date(Y);?>" />
								</div>
							  </div>
							 
							  <div class="control-group">
								<label class="control-label" for="selectError">Nama Siswa</label>
								<div class="controls">
								
								<?php     
$result = mysqli_query($koneksi, "select * from siswa");  
$jsArray = "var prdName = new Array();\n";  
echo '<select style="width:200px" id="selectError" data-rel="chosen" name="pilih_siswa" onchange="document.getElementById(\'jurusan\').value = prdName[this.value]">';  
echo '<option>-------</option>';  
while ($row = mysqli_fetch_array($result)) { 
	$j=mysqli_fetch_array(mysqli_query($koneksi, "select jurusan.jurusan_nama FROM jurusan INNER JOIN kelas on jurusan.jurusan_id=kelas.jurusan_id WHERE kelas.kelas_id='$row[kelas_id]'"));
    echo '<option value="' . $row['siswa_nama'] . '">' . $row['siswa_nama'] . '</option>'; 
    $jsArray .= "prdName['" . $row['siswa_nama'] . "'] = '" . addslashes($j['jurusan_nama']) . "';\n"; }
echo '</select>';?></div></div>

<div class="control-group">
								<label class="control-label" for="selectError3">Jurusan</label>
								<div class="controls">
								  <input name="jurusan" type="text" id="jurusan" readonly="true" size="9" />
	<script type='text/javascript'>    
    <?php echo $jsArray; ?>  
    </script> 
								</div>
							  </div>
							  
						<div class="control-group">
								<label class="control-label" for="selectError3">Tahun Ajaran</label>
								<div class="controls">
								  <select  name="tahunajaran" id="selectError3">
									<option>2014/2015</option>
									<option>2015/2016</option>
									<option>2016/2017</option>
									
								  </select>
								</div>
							  </div>
							
						<div class="control-group">
								<label class="control-label" for="selectError3">Pilih Kelas</label>
								<div class="controls">
								  <select  name="kelas" id="selectError3">
								  	<?php  
										$kelas = mysqli_query($koneksi, "SELECT * FROM kelas");
										while ($row = mysqli_fetch_array($kelas)) {
									?>
									<option value="<?php echo $row['kelas_id'] ?>"><?php echo $row['kelas_nama']; ?></option>
									<?php } ?>
								  </select>
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="selectError3">Semester</label>
								<div class="controls">
								  <select  name="semester" id="selectError3">
									<option>1</option>
									<option>2</option>
								  </select>
								</div>
							  </div>
							  
							  <div class="form-actions">
								<input type="submit" class="btn btn-primary"></input>
								
							  </div>
							</fieldset>
						  </form>
						  
		
						  
		
					
					</div>
				</div><!--/span-->
			
			</div><!--/row-->

