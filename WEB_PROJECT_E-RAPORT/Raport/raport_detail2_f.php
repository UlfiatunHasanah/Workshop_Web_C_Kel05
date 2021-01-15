<?php
 
ob_start();
 include "raport_detail2pdf.php";
 $content = ob_get_clean();

 require_once "asset/pdf/html2pdf.class.php";
 try
 {
 $html2pdf = new HTML2PDF('L','A4', 'en', false, 'ISO-8859-15'); // P : Portrait or L: Landscape // page format : A4, A3, ...
 $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
 $html2pdf->Output('"cetak_raport.pdf');
 }
 catch(HTML2PDF_exception $e) { echo $e; }
?> 
