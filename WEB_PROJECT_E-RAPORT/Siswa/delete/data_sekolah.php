
<div class='row-fluid sortable'>		
				<div class='box span12'>
					<div class='box-header' data-original-title>
						<h2><i class='halflings-icon user'></i><span class='break'></span>Data Sekolah</h2>
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
		  
          <th>Nama</th>
          <th>Alamat</th>
          <th>Kota</th>
          <th>Email</th>
          <th>Kontak</th>
          <th>Aksi</th>
							  </tr>
						  </thead>   
						  <tbody>
							<tr>
							<?php
		$qtmpil_sup="select * from sekolah order by inc asc";					
		$qp_sup=mysql_query($qtmpil_sup);
		
		while($row2=mysql_fetch_array($qp_sup)){ ?>
		
		
		  
          <td><?php echo "$row2[sekolah_nama]"; ?></td>
          <td><?php echo "$row2[sekolah_alamat]"; ?></td>
          <td><?php echo "$row2[sekolah_kota]"; ?></td>
          <td><?php echo "$row2[sekolah_email]"; ?></td>
          <td><?php echo "$row2[sekolah_kontak]"; ?></td>
		  
          <td><?php echo "<a class='btn btn-success' href=index.php?halaman=form_ubah_data&kode=sekolah_update&id=$row2[sekolah_id]>"; ?>
          	 <i class='halflings-icon white edit'></i>
			 <?php echo "</a> ";         	 
          echo"</td>
		
		
								
							</tr>";
							$no++;}?>
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->