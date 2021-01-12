<?php
require_once "library/koneksi.php";
require_once "library/fungsi_standar.php";

?>
<a href='index.php?halaman=form_data_master&kode=pelajaran_insert' class='btn btn-large btn-info'>
   <span>Tambah Data</span>
   </a>
   <br/>
   <br/>
<div class='row-fluid sortable'>		
				<div class='box span12'>
					<div class='box-header' data-original-title>
						<h2><i class='halflings-icon user'></i><span class='break'></span>Data pelajaran</h2>
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
								  <th>Kode Pelajaran</th>
								  <th>Nama Pelajaran</th>
								  <th>Kategori pelajaran</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
							<tr>
							<?php
		$qtmpil_pelajaran="select * from pelajaran order by inc asc";						
		$qp_brg=mysql_query($qtmpil_pelajaran);
		$no=1;
		while($row1=mysql_fetch_array($qp_brg)){ ?>
		
		
		<td><?php echo "$no"; ?></td>
          <td><?php echo "$row1[pelajaran_id]"; ?></td>
          <td><?php echo "$row1[pelajaran_nama]"; ?></td>
          <td><?php echo "$row1[pelajaran_kategori]"; ?></td>
		  
          <td><?php echo "<a class='btn btn-info' href=index.php?halaman=form_ubah_data&kode=pelajaran_update&id=$row1[inc]>"; ?>
          	 <i class='halflings-icon white edit'></i>
			 <?php echo "</a> ";
			 
			 echo "<a class='btn btn-danger' href='proses.php?proses=pelajaran_delete&id=$row1[inc]'>"; ?>
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