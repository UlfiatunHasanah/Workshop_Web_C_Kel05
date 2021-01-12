<?php
require_once "library/koneksi.php";
require_once "library/fungsi_standar.php";

?>
<html>
<head>
<title>Raport Online</title>

</head>
<body>
<link href='css/style_doc.css' rel='stylesheet' type='text/css' />

<?php
	$raport="SELECT * FROM raport WHERE raport_id='$_GET[id]' order by inc asc";
	$qraport=mysql_query($raport);
	$data=mysql_fetch_array($qraport);
	
	$a=mysql_fetch_array(mysql_query("SELECT * FROM siswa Where siswa_id='$data[siswa_id]'"));
  $b=mysql_fetch_array(mysql_query("SELECT * FROM sekolah"));
  $c=mysql_fetch_array(mysql_query("select jurusan.jurusan_nama FROM jurusan INNER JOIN kelas on jurusan.jurusan_id=kelas.jurusan_id WHERE kelas.kelas_id='$a[kelas_id]'"));
  $d=mysql_fetch_array(mysql_query("SELECT * FROM kelas WHERE kelas_id='$a[kelas_id]' "));
?>
<table width='807' border='0'>
  <tr>
    <td width='179'>Nama Sekolah</td>
    <td width='8'>:</td>
    <td width='305'><?php echo "$b[sekolah_nama]"; ?></td>
    <td width='103'>Kelas / Jurusan</td>
    <td width='14'>:</td>
    <td width='158'><?php echo "$d[kelas_id] / $c[jurusan_nama]"; ?></td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td>:</td>
    <td><?php echo "$b[sekolah_alamat]"; ?></td>
    <td>Catur Wulan Ke</td>
    <td>:</td>
    <td><?php echo "$data[semester]"; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>:</td>
    <td>................................................................</td>
    <td>Tahun Pelajaran</td>
    <td>:</td>
    <td><?php echo "$data[tahunajaran]"; ?></td>
  </tr>
  <tr>
    <td>Nama Siswa/ Nomor Induk</td>
    <td>:</td>
    <td colspan='4'><?php echo "$a[siswa_nama] / $a[siswa_id]"; ?> </td>
  </tr>
</table>

<p></p>

<table width='807' border='1'>
  <tr>
    <th width='32' rowspan='2' scope='col'>No</th>
    <th width='354' rowspan='2' scope='col'>Mata Pelajaran</th>
    <th height='39' colspan='2' scope='col'>Nilai</th>
    <th colspan='2' scope='col'>Nilai Rata-rata Kelas</th>
  </tr>
  <tr>
    <td width='89' height='23' align='center'>Angka</td>
    <td width='90' align='center'>Huruf</td>
    <td width='101' align='center'>Angka</td>
    <td width='101' align='center'>Huruf</td>
  </tr>
		<?php 
		$pesan="SELECT * FROM raport_detail WHERE raport_id='$_GET[id]' ORDER BY pelajaran_id ASC";
		$query=mysql_query($pesan);
		$no=1;
		while($row=mysql_fetch_array($query)){
		?>
   <tr>
        <td align="center"><?php echo "$no"; ?></td>
        <td><?php echo "$row[pelajaran_nama]"; ?></td>
        <td align="center"><?php echo "$row[nilai_angka]"; ?></td>
        <td align="center"><?php echo digit($row['nilai_huruf']);?></td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
      </tr>
      <?php $no++;} ?>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
   <tr>
    <td>&nbsp;</td>
    <td>Muatan Lokal (Sejumlah mata pelajaran)</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td rowspan='3'>&nbsp;</td>
    <td>a .............................................................................</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>b .............................................................................</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>c .............................................................................</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan='2'>&nbsp;&nbsp;Jumlah</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan='6'>&nbsp;&nbsp;Peringkat kelas ke : ................................................................................................
	dari .......................................................................................................siswa</td>
  </tr>
</table>

<p></p>
<table width='807' border='1'>
  <tr>
  
    <th height='31' colspan='3' scope='col'>Kegiatan Ekstrakurikuler dan Kepribadian</th>
     <th width='95' scope='col'>Nilai</th>
  </tr>
  <tr>
    <td colspan='2' rowspan='3' scope='col'>&nbsp;&nbsp;Kegiatan Ekstrakurikuler</td>
    <td width='489'>&nbsp;&nbsp;1. </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;2.</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;3.</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan='2' rowspan='3'>&nbsp;&nbsp;Kepribadian</td>
    <td>&nbsp;&nbsp;1. Kelakuan</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;2. Kerajinan</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;3. Kerapian</td>
    <td>&nbsp;</td>
  </tr>
</table>
<p></p>

<table width='807' border='1'>
  <tr>
    <td width='130' rowspan='3'>&nbsp;&nbsp;Ketidakhadiran</td>
    <td colspan='4'>&nbsp;&nbsp;1. Sakit &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...............hari</td>
  </tr>
  <tr>
    <td colspan='4'>&nbsp;&nbsp;2. Izin &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...............hari</td>
  </tr>
  <tr>
    <td colspan='4'>&nbsp;&nbsp;3. Tanpa Keterangan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...............hari</td>
  </tr>
  <tr>
    <td height='49' colspan='5'>&nbsp;&nbsp;Catatan untuk diperhatikan Orang Tua / Wali</td>
  </tr>
</table>


<p></p>



<table width='807' border='0	'>
  <tr>
    <td colspan='2'>&nbsp;</td>
    <td>Diberika di</td>
    <td>:</td>
    <td>...................................</td>
  </tr>
  <tr>
    <td colspan='2'>&nbsp;</td>
    <td width='103'>Tanggal</td>
    <td width='14'>:</td>
    <td width='158'>...................................</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width='234' align='center'>Mengetahui</td>
    <td width='258'>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align='center'>Orang Tua/ Wali,</td>
    <td>&nbsp;</td>
    <td colspan='3' align='center'>Guru Kelas</td>
  </tr>
  <tr>
    <td height='68'>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan='3'>&nbsp;</td>
  </tr>
  <tr>
    <td align='center'>(................................................)</td>
    <td>&nbsp;</td>
    <td colspan='3' align='center'>(................................................)</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan='3' >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NIP.</td>
  </tr>
</table>





</body>
</div>
</html>