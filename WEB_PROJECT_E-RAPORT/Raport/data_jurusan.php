<?php
require_once "library/koneksi.php";
require_once "library/fungsi_standar.php";

?>
<a href='index.php?halaman=form_data_master&kode=jurusan_insert' class='btn btn-large btn-info'>
   <span>Tambah Data</span>
   </a>
   <br/>
   <br/>
<div class='row-fluid sortable'>		
				<div class='box span12'>
					<div class='box-header' data-original-title>
						<h2><i class='halflings-icon user'></i><span class='break'></span>Data jurusan</h2>
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
								  <th>Kode jurusan</th>
								  <th>Nama jurusan</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
							<tr>
							<?php
		$qtmpil_jurusan="select * from jurusan order by inc asc";						
		$qp_brg=mysqli_query($qtmpil_jurusan);
		$no=1;
		while($row1=mysqli_fetch_array($qp_brg)){ ?>
		
		
		<td><?php echo "$no"; ?></td>
          <td><?php echo "$row1[jurusan_id]"; ?></td>
          <td><?php echo "$row1[jurusan_nama]"; ?></td>
         
          <td><?php echo "<a class='btn btn-info' href=index.php?halaman=form_ubah_data&kode=jurusan_update&id=$row1[inc]>"; ?>
          	 <i class='halflings-icon white edit'></i>
			 <?php echo "</a> ";
			 
			 echo "<a class='btn btn-danger' href='proses.php?proses=jurusan_delete&id=$row1[inc]'>"; ?>
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
