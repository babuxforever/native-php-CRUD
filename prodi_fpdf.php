<?php
// memanggil library FPDF
require('fpdf184/fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
//$pdf = new FPDF('l','mm','A5');
$pdf = new FPDF('P', 'mm', array(216, 330));
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial', 'B', 16);
// mencetak string 
$pdf->Cell(190, 7, 'POLITEKNIK NEGERI SAMARINDA', 1, 1, 'C');
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(190, 7, 'DAFTAR PROGRAM STUDI', 0, 1, 'C');

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10, 7, '', 0, 1);

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(30, 6, 'KODE PRODY', 1, 0, 'C');
$pdf->Cell(60, 6, 'NAMA PRODY', 1, 0, 'C');
$pdf->Cell(100, 6, 'NAMA JURUSAN', 1, 1, 'C');


$pdf->SetFont('Arial', '', 10);

include 'conf/koneksi.php';
$sql = "select a.id_prodi,a.nama_prodi,b.nama_jurusan 
       from prodi a, jurusan b
       where a.id_jurusan=b.id_jurusan";
$hasil = mysqli_query($konek, $sql);
while ($row = mysqli_fetch_array($hasil)) {
    $pdf->Cell(30, 6, $row[0], 1, 0, 'C');
    $pdf->Cell(60, 6, $row[1], 1, 0);
    $pdf->Cell(100, 6, $row[2], 1, 1);
}

$pdf->Output();
