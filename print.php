<!DOCTYPE html>
<?php

header('Content-Type: application/vmd-ms-excel');
header('Content-Disposition: attachment; filename=prodi.xls');
include 'conf/koneksi.php';
error_reporting(0);

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3 align="center">DAFTAR PROGRAM STUDI</h3>
    <table border="1" width="70%" align="center">
        <tr>
            <th width="15%">Id Prodi</th>
            <th width="35%">Nama Prodi</th>
            <th width="30%">Nama Jurusan</th>
            <th width="30%">Aksi</th>
        </tr>
    </table>
</body>

</html>