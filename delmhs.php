<?php
include 'conf/koneksi.php';
$id=$_GET['id'];
$sql="DELETE from mahasiswa where nim='$id'";
$result=mysqli_query($konek,$sql);
if($result)
	echo "<script language='JavaScript'>
		  (window.alert('Data Mahasiswa sudah dihapus'))
		   location.href='mahasiswa.php'
		   </script>";
else
	echo "<script language='JavaScript'>
		  (window.alert('Data Mahasiswa tidak dapat dihapus, sedang dipakai tabel yang lain'))
		   location.href='mahasiswa.php'
		   </script>";

?>