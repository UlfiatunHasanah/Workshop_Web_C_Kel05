
   <div class="alert alert-block">
							<button type="button" class="close" data-dismiss="alert">×</button>
							<h4 class="alert-heading">Attention!</h4>
							<p>Berikut ini adalah catatan raport siswa .</p>
						</div>
	
<a href='?halaman=form_raport' class='btn btn-large btn-info'>
   <span>Tambah Data</span>
   </a>
   <br/>
   <br/>
   
<div class='row-fluid sortable'>		
				<div class='box span12'>
					<div class='box-header' data-original-title>
						<h2><i class='halflings-icon user'></i><span class='break'></span>Data Raport</h2>
						<div class='box-icon'>
							
							<a href='#' class='btn-minimize'><i class='halflings-icon chevron-up'></i></a>
							<a href='#' class='btn-close'><i class='halflings-icon remove'></i></a>
						</div>
					</div>
					<div class='box-content'>
						<table class='table table-striped table-bordered bootstrap-datatable datatable'>
						  <thead>
							  <tr>
							  
	<th>No</th>
	<th>No.Trans</th>
    <th>Nama siswa</th>
    <th>Tahun Ajaran</th>
    <th>Kelas</th>
    <th>Semester</th>
    <th>Jumlah Penilaian</th>
	 <th>Export to</th>
							  </tr>
						  </thead>   
						  <tbody>
							<tr>
							<?php
		$pesan="SELECT * FROM raport where kelas='$_GET[kelas]' ORDER BY inc DESC LIMIT 25";
		$query=mysqli_query($connect,$pesan);
		$no=1;
		while($row=mysqli_fetch_array($query)){ ?>
		
		
		<td><?php echo "$no"; ?></td>
           <td><a href="#" onclick="javascript:wincal=window.open('raport_detail.php?id=<?php echo $row['raport_id']; ?>','Lihat 		Data','width=790,height=400,scrollbars=1');">
    <?php echo $row['raport_id']; ?></a>
    </td>
    <td><?php echo "$row[siswa_nama]"; ?></td>		
    
    <td><?php echo "$row[tahunajaran]"; ?></td>					
    <td><?php echo "$row[kelas]"; ?></td>					
    <td><?php echo "$row[semester]"; ?></td>
	
<td>
					<?php
						$sum="SELECT SUM(nilai_angka)AS total FROM raport_detail WHERE raport_id='$row[raport_id]'";
						$qsum=mysqli_query($connect,$sum);
						$dsum=mysqli_fetch_array($qsum);
						echo digit($dsum['total']);
					?>
                </td>	
				<td><?php echo "<a class='btn btn-success' href='raport_detail2.php?id=$row[raport_id]'><i class='halflings-icon white picture'></i></a> ";?>
	<?php echo "<a class='btn btn-success' href='raport_detail2_f.php?id=$row[raport_id]'><i class='halflings-icon white print'></i></a> ";?>
	</td>	
								
							</tr>
							<?php $no++;}?>
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->


