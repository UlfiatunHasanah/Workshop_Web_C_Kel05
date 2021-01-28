<?php
require_once "library/koneksi.php";
require_once "library/fungsi_standar.php";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="style/style_index.css" type="text/css">
<style type="text/css">
#noBorder
{
	border:none;	
}
table
{
	margin:5px 9px;
}
td
{
	padding:5px 9px;
	border:1px solid #c0d3e2;
}
#namaField{
	color:#FFF;
	background-color:#333;
	text-align:center;
	padding-top:7px;
	border:none;
}
</style>

</head>

<body>
<?php
	$warna1="#c0d3e2";
	$warna2="#cfdde7";
	$warna=$warna1;

	$raport="SELECT * FROM raport WHERE raport_id='$_GET[id]' order by inc asc";
	$qraport=mysqli_query($connect,$raport);
	$data=mysqli_fetch_array($qraport);
  $siswa = mysqli_query($connect,"SELECT siswa_nama FROM siswa WHERE siswa_id='$data[siswa_id]' ");
  $row=mysqli_fetch_array($siswa);
?>
<table cellspacing="0" cellpadding="0">
<tr>
    <td id="noBorder">Nama siswa</td>
    <td id="noBorder">:</td>
    <td id="noBorder"><?php echo "$row[siswa_nama]"; ?></td>
  </tr>
  <tr>
    <td id="noBorder">Kode Raport Siswa</td>
    <td id="noBorder">:</td>
    <td id="noBorder"><?php echo "$data[raport_id]"; ?></td>
  </tr>
  
  <tr>
    <td id="noBorder">Program Keahlian</td>
    <td id="noBorder">:</td>
    <td id="noBorder"> <?php echo "$data[jurusan]"; ?> </td>
  </tr>
  <tr>
    <td id="noBorder">Kelas</td>
    <td id="noBorder">:</td>
    <td id="noBorder"> XII </td>
  </tr>
  
</table>
    <table cellspacing="1" cellpadding="0">
      <tr>
        <td id="namaField">Kode Pelajaran</td>
        <td id="namaField">Nama Pelajaran</td>
        <td id="namaField">Nilai Angka</td>
        <td id="namaField">Nilai Huruf</td>
      </tr>
      <?php 
		$pesan="SELECT * FROM raport_detail WHERE raport_id='$_GET[id]' ORDER BY pelajaran_id ASC";
		$query=mysqli_query($connect,$pesan);
		
		while($row=mysqli_fetch_array($query)){
			if ($warna==$warna1){
				$warna=$warna2;
			}
			else{
				$warna=$warna1;
			}
		?>
      <tr bgcolor=<?php echo $warna; ?>>
        <td><?php echo "$row[pelajaran_id]"; ?></td>
        <td><?php echo "$row[pelajaran_nama]"; ?></td>
        <td align="center"><?php echo "$row[nilai_angka]"; ?></td>
        <td align="center"><?php echo digit($row['nilai_huruf']);?></td>
      </tr>
      <?php } ?>
      <tr>
        <td style="color:#FFF; background-color:#333; border:none" colspan="2" align="left">Jumlah Nilai </td>
        <td style="color:#FFF; background-color:#333; border:none" align="center">
        	<?php
				$sumnilai_angka="SELECT SUM(nilai_angka) AS totalnilai_angka FROM raport_detail WHERE raport_id='$_GET[id]'";
				$qsumnilai_angka=mysqli_query($connect,$sumnilai_angka);
				$dsumnilai_angka=mysqli_fetch_array($qsumnilai_angka);
				echo $dsumnilai_angka['totalnilai_angka'];
			?>
        </td>
        <td style="color:#FFF; background-color:#333; border:none">&nbsp;</td>
       </tr>
      
    </table>
</body>
</html>