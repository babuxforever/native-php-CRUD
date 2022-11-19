<!DOCTYPE html>
<?php
include 'conf/koneksi.php';
error_reporting(0);
?>
<html>
<head>
	<title>Tambah Mahasiswa</title>
</head>
<body>
<table border="0" align="center" width="50%">
	<caption><h2>Tambah Data Mahasiswa</h2></caption>
	<form method="POST">
	<tr>
		<td width="20%">Jurusan</td>
		<td width="80%">
			<select name="jurusan" onchange="submit()"> 
				<option>-Pilih-</option>
				<?php
				$qry="SELECT * from jurusan";
				$res=mysqli_query($konek,$qry);
				while($brs=mysqli_fetch_array($res))
				{
				 if($_POST['jurusan']==$brs[0])	
				   echo "<option value='$brs[0]' selected>$brs[1]</option>";
				 else
				   echo "<option value='$brs[0]'>$brs[1]</option>";	
				}
				?>
			</select>
		</td>
	</tr>	
	<tr>
		<td width="20%">Nama Prodi</td>
		<td width="80%">
			<select name="prodi">
			    <option>--Pilih Prodi--</option> 
				<?php
				$jurusan=$_POST['jurusan'];
				$qry="SELECT * from prodi where id_jurusan=$jurusan";
				$res=mysqli_query($konek,$qry);
				while($brs=mysqli_fetch_array($res))
				{
				 echo "<option value='$brs[0]'>$brs[1]</option>";
				}
				?>
			</select>
		</td>
	</tr>
	<tr>
		<td width="20%">Nim</td>
		<td width="80%"><input type="text" name="nim" size="80" value="<?php echo $_POST['nim'] ?>" required=""></td>
	</tr>
	<tr>
		<td width="20%">Nama</td>
		<td width="80%"><input type="text" name="nama" size="80" value="<?php echo $_POST['nama'] ?>" required=""></td>
	</tr>
	<tr>
		<td width="20%">Tgl Lahir</td>
		<td width="80%"><input type="date" name="tgl" size="80" value="<?php echo $_POST['tgl'] ?>" required=""></td>
	</tr>
	<tr>
		<td width="20%">Alamat</td>
		<td width="80%"><input type="text" name="alamat" size="80" value="<?php echo $_POST['alamat'] ?>" required=""></td>
	</tr>
	<tr>
		<td width="20%">Agama</td>
		<td width="80%">
			<select name="agama">
				<option>-Pilih Agama-</option>
				<option value="1" <?php if($_POST['agama']=="1") echo "selected"; ?>>Islam</option>
				<option value="2" <?php if($_POST['agama']=="2") echo "selected"; ?>>Kristen</option>
				<option value="3" <?php if($_POST['agama']=="3") echo "selected"; ?>>Katholik</option>
				<option value="4" <?php if($_POST['agama']=="4") echo "selected"; ?>>Hindu</option>
				<option value="5" <?php if($_POST['agama']=="5") echo "selected"; ?>>Budha</option>
			</select>
		</td>
	</tr>
	<tr>
		<td width="20%">Kelamin</td>
		<td width="80%">
			<input type="radio" name="kelamin" <?php if($_POST['kelamin']=="1") echo "checked"; ?> value="1"> Pria 
			<input type="radio" name="kelamin" <?php if($_POST['kelamin']=="2") echo "checked"; ?> value="2"> Wanita 
		</td>
	</tr>
	<tr>
		<td width="20%">Nomor HP</td>
		<td width="80%"><input type="text" name="hp" size="80" value="<?php echo $_POST['hp'] ?>" required=""></td>
	</tr>
	<tr>
		<td width="20%">Email</td>
		<td width="80%"><input type="email" name="mail" size="80" value="<?php echo $_POST['mail'] ?>" required=""></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="save" value="Simpan">
		</form>		
		<form method="POST" action="mahasiswa.php">
			<input type="submit" name="back" value="Kembali">
		</form></td>
	</tr>
	
</table>
<?php

if(isset($_POST['save']))
{
	$prodi=$_POST['prodi'];
	$nim=$_POST['nim'];
	$nama=$_POST['nama'];
	$tgl=$_POST['tgl'];
	$alamat=$_POST['alamat'];
	$agama=$_POST['agama'];
	$kelamin=$_POST['kelamin'];
	$hp=$_POST['hp'];
	$mail=$_POST['mail'];
	$sql="INSERT into mahasiswa (nim,nama,tgl_lahir,alamat,agama, kelamin,no_hp,email,id_prodi) values ('$nim','$nama','$tgl', '$alamat','$agama','$kelamin','$hp','$mail',$prodi)";
	$hasil=mysqli_query($konek,$sql);
	if($hasil)
	{
		echo "<script language='JavaScript'>
		  (window.alert('Data Mahasiswa sudah disimpan'))
		   location.href='mahasiswa.php'
		   </script>";
	}
	else
	{
		echo "<script language='JavaScript'>
		  (window.alert('Data Mahasiswa tidak dapat disimpan'))
		   location.href='addmhs.php'
		   </script>";
	}	
}
?>
</body>
</html>