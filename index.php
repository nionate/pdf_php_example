<?php
require 'vendor/autoload.php';
Use Dompdf\Dompdf;

$pdf = new Dompdf();

$pdf->set_paper("A4", "portrait");

$pdf->load_html(utf8_decode(file_get_contents('pdf.html')));

$pdf->render();

$pdf->stream("ejemplo");