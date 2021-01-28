<?php
 require __DIR__.'/vendor/autoload.php';
 use Spipu\Html2Pdf\Html2Pdf;
 use Spipu\Html2Pdf\Exception\Html2PdfException;
 use Spipu\Html2Pdf\Exception\ExceptionFormatter;
 //include "raport_detail2pdf.php";
 
   ob_start();
 	include dirname(__FILE__).'\raport_detail2pdf.php';
 	$content = ob_get_clean();
 //require_once "asset/pdf/html2pdf.class.php";
 try
 {
 	$html2pdf = new HTML2PDF('L','B4', 'en', false, 'ISO-8859-15'); // P : Portrait or L: Landscape // page format : A4, A3, ...
 	$html2pdf->writeHTML($content);
 	$html2pdf->Output('cetak_rapot.pdf');
 	ob_end_flush();
 }
 catch(Html2PdfException $e) {
 	$html2pdf->clean();
  	$formatter = new ExceptionFormatter($e);
  	echo $formatter->getHtmlMessage;
}
?>
