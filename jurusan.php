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
<form method="POST" action="add_jurusan.php">
	<input type="submit" name="add" value="Tambah Jurusan">
</form>
<h3 align="center">DAFTAR JURUSAN</h3>
<table border="1" width="50%" align="center">
	<caption>
		<form method="POST">
			<input type="text" name="kata" size="40">
			<input type="submit" name="cari" value="Search">
		</form>
	</caption>
	<tr>
		<th width="15%">Id Jurusan</th>
		<th width="65%">Nama Jurusan</th>
		<th width="20%">Aksi</th>
	</tr>
	<?php
	$kata=$_POST['kata'];
	$qry="SELECT * from jurusan WHERE nama_jurusan like '%$kata%'";
	$hasil=mysqli_query($konek,$qry);
	while($row=mysqli_fetch_array($hasil))
	{
	  echo "<tr>";
	  echo "<td align='center'>$row[id_jurusan]</td>";
	  echo "<td>$row[nama_jurusan]</td>";
	  echo "<td align='center'><a href='edit_jurusan.php?id=$row[0]'>Edit </a> | ";
	  echo "<a href='del_jurusan.php?id=$row[0]'>Delete </a></td>";
	  echo "</tr>";
	}
	?>
</table>
</body>
</html>