<?php
require 'vendor/autoload.php';
Use Dompdf\Dompdf;

$html = "<h1>GENERACION DE PDF</h1>";

$pdf = new Dompdf();

$pdf->set_paper("A4", "portrait");

$pdf->load_html(utf8_decode($html));

$pdf->render();

//$pdf->stream("ejemplo.pdf");