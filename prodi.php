<!DOCTYPE html>
<?php
include 'conf/koneksi.php';
error_reporting(0);
?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<form method="POST" action="add_prodi.php">
	<input type="submit" value="Tambah Prodi">
</form>
<a href="prodi_print.php">Cetak</a> | 
<h3 align="center">DAFTAR PROGRAM STUDI</h3>
<table border="1" width="70%" align="center">
	<caption>
		<form method="POST">
			<input type="text" name="kata" size="40">
			<input type="submit" name="cari" value="Search">
		</form>
	</caption>
	<tr>
		<th width="15%">Id Prodi</th>
		<th width="35%">Nama Prodi</th>
		<th width="30%">Nama Jurusan</th>
		<th width="20%">Aksi</th>
	</tr>
	<?php
	$kata=$_POST['kata'];
	$qry="SELECT a.id_prodi,a.nama_prodi,b.nama_jurusan from prodi a, jurusan b WHERE a.id_jurusan=b.id_jurusan and (b.nama_jurusan like '%$kata%' or a.nama_prodi like '%$kata%')";
	$hasil=mysqli_query($konek,$qry);
	while($row=mysqli_fetch_array($hasil))
	{
		echo "<tr>";
		echo "<td align='center'>$row[0]</td>";
		echo "<td>$row[1]</td>";
		echo "<td>$row[2]</td>";
		echo "<td align='center'><a href='edit_prodi.php?id=$row[0]'>Edit </a> | ";
		echo "<a href='del_prodi.php?id=$row[0]'>Delete </a></td>";
		echo "</tr>";
	}
	?>
</table>
</body>
</html>