<?php
include 'conf/koneksi.php';
error_reporting(0);
$id=$_GET['id'];
$sql="DELETE from prodi where id_prodi=$id";
$result=mysqli_query($konek,$sql);
  if($result)
  	echo "<script language='JavaScript'>
			(window.alert('Data sudah dihapus'))
			location.href='prodi.php'
			</script>";
  else
  	echo "<script language='JavaScript'>
			(window.alert('Data tidak dapat dihapus'))
			location.href='prodi.php'
			</script>";
  
?>