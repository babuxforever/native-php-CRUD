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
<h2 align="center">TAMBAH DATA PROGRAM STUDI</h2>
<form method="POST">
<table border="0" width="60%" align="center">
  <tr>	
	<td width="25%" align="right">Jurusan : </td>
	<td width="75%">
		<select name="jurusan">
		  <option>-Pilih Jurusan-</option>	
		  <?php
		  $sql="SELECT * from jurusan";
		  $result=mysqli_query($konek,$sql);
		  while($brs=mysqli_fetch_array($result))
		  {
		  	echo "<option value='$brs[0]'>$brs[1]</option>";
		  }	
		  ?>	
		</select>
	</td>	
  </tr>	
  <tr>	
	<td width="25%" align="right">Nama Prodi : </td>
	<td width="75%">
		<input type="text" name="prodi" size="80" required>
	</td>	
  </tr>
  <tr>	
	<td width="25%" align="right"></td>
	<td width="75%">
		<input type="submit" name="add" value="Save">
	</td>	
  </tr>
</table>
</form>
<?php
if(isset($_POST['add']))
{
  $jurusan=$_POST['jurusan'];
  $prodi=$_POST['prodi'];
  $query="INSERT into prodi (nama_prodi,id_jurusan) values ('$prodi',$jurusan)";
  $result=mysqli_query($konek,$query);
  //var_dump($query);
  if($result)
  	echo "<script language='JavaScript'>
			(window.alert('Data sudah disimpan'))
			location.href='prodi.php'
			</script>";
  else
  	echo "<script language='JavaScript'>
			(window.alert('Data tidak dapat disimpan'))
			location.href='add_prodi.php'
			</script>";
  
}
?>
</body>
</html>