<a href='index.php?halaman=form_data_master&kode=siswa_insert' class='btn btn-large btn-info'>
   <span>Tambah Data</span>
   </a>
   <br/>
   <br/>
<div class='row-fluid sortable'>		
				<div class='box span12'>
					<div class='box-header' data-original-title>
						<h2><i class='halflings-icon user'></i><span class='break'></span>Data Siswa</h2>
						<div class='box-icon'>
							
							<a href='#' class='btn-minimize'><i class='halflings-icon chevron-up'></i></a>
							<a href='#' class='btn-close'><i class='halflings-icon remove'></i></a>
						</div>
					</div>
					<div class='box-content'>
						<table class='table table-striped table-bordered bootstrap-datatable datatable'>
						  <thead>
							  <tr>
		  
          <th>Nama</th>
          <th>Alamat</th>
          <th>Kontak</th>
          <th>Jurusan</th>
          <th>Aksi</th>
							  </tr>
						  </thead>   
						  <tbody>
							<tr>
							<?php
		$qtmpil_sup="select * from siswa order by inc asc";					
		$qp_sup=mysqli_query($koneksi, $qtmpil_sup);
		
		while($row2=mysqli_fetch_array($qp_sup)){ 
		$j=mysqli_fetch_array(mysqli_query($koneksi"select * from jurusan where jurusan_id ='$row2[jurusan_id]'"));
		?>
		
		
		  
          <td><?php echo "$row2[siswa_nama]"; ?></td>
          <td><?php echo "$row2[siswa_alamat]"; ?></td>
          
          <td><?php echo "$row2[siswa_kontak]"; ?></td>
          <td><?php echo "$j[jurusan_nama]"; ?></td>
		  
          <td><?php echo "<a class='btn btn-info' href=index.php?halaman=form_ubah_data&kode=siswa_update&id=$row2[siswa_id]>"; ?>
          	 <i class='halflings-icon white edit'></i>
			 <?php echo "</a> ";
			 
			 echo "<a class='btn btn-danger' href='proses.php?proses=siswa_delete&id=$row2[siswa_id]'>"; ?>
          	 <i class='halflings-icon white trash'></i>
			 <?php echo "</a>";

         	 
          echo"</td>
		
		
								
							</tr>";
							$no++;}?>
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->