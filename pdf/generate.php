<?php
require_once dirname(__FILE__).'/../vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;
use Spipu\Html2Pdf\Exception\Html2PdfException;
use Spipu\Html2Pdf\Exception\ExceptionFormatter;


$html = $_POST['data'];

$html2pdf = new Html2Pdf();
$html2pdf->writeHTML($html);
$html2pdf->output('my_doc.pdf', 'D');
echo "finished";



