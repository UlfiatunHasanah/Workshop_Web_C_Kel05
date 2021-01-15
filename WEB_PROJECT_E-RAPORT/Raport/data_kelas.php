<?php
require_once "library/koneksi.php";
require_once "library/fungsi_standar.php";

?>
<a href='index.php?halaman=form_data_master&kode=kelas_insert' class='btn btn-large btn-info'>
   <span>Tambah Data</span>
   </a>
   <br/>
   <br/>
<div class='row-fluid sortable'>		
				<div class='box span12'>
					<div class='box-header' data-original-title>
						<h2><i class='halflings-icon user'></i><span class='break'></span>Data kelas</h2>
						<div class='box-icon'>
							<a href='#' class='btn-setting'><i class='halflings-icon wrench'></i></a>
							<a href='#' class='btn-minimize'><i class='halflings-icon chevron-up'></i></a>
							<a href='#' class='btn-close'><i class='halflings-icon remove'></i></a>
						</div>
					</div>
					<div class='box-content'>
						<table class='table table-striped table-bordered bootstrap-datatable datatable'>
						  <thead>
							  <tr>
								  <th>No</th>
								  <th>Kode kelas</th>
								  <th>Nama kelas</th>
								  <th>Jurusan</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
							<tr>
							<?php
		$qtmpil_kelas="select * from kelas order by inc asc";						
		$qp_kls=mysqli_query($qtmpil_kelas);
		$no=1;
		while($row1=mysqli_fetch_array($qp_kls)){ ?>
		
		
		<td><?php echo "$no"; ?></td>
          <td><?php echo "$row1[kelas_id]"; ?></td>
          <td><?php echo "$row1[kelas_nama]"; ?></td>
          <td><?php echo "$row1[jurusan_nama]"; ?></td>
         
          <td><?php echo "<a class='btn btn-info' href=index.php?halaman=form_ubah_data&kode=kelas_update&id=$row1[inc]>"; ?>
          	 <i class='halflings-icon white edit'></i>
			 <?php echo "</a> ";
			 
			 echo "<a class='btn btn-danger' href='proses.php?proses=kelas_delete&id=$row1[inc]'>"; ?>
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
