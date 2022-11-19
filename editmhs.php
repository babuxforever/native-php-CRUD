<!DOCTYPE html>
<?php
include 'conf/koneksi.php';
$nim=$_GET['id'];
$sql="SELECT * from mahasiswa where nim='$nim'";
$hasil=mysqli_query($konek,$sql);
$brs=mysqli_fetch_array($hasil);
$nama=$brs[1];
$tgl=$brs[2];
$alamat=$brs[3];
$agama=$brs[4];
$kelamin=$brs[5];
$hp=$brs[6];
$mail=$brs[7];
$prodi=$brs[8];
?>
<html>
<head>
	<title>Ubah Data Mahasiswa</title>
</head>
<body>
<table border="0" align="center" width="50%">
	<caption><h2>Ubah Data Mahasiswa</h2></caption>
	<form method="POST">
    <tr>
		<td width="20%">Nim</td>
		<td width="80%"><input type="text" name="nim" size="80" readonly="" value="<?php echo $nim; ?>"></td>
	</tr>
	<tr>
		<td width="20%">Nama</td>
		<td width="80%"><input type="text" name="nama" size="80" required="" value="<?php echo $nama; ?>"></td>
	</tr>
	<tr>
		<td width="20%">Tgl Lahir</td>
		<td width="80%"><input type="date" name="tgl" size="80" required="" value="<?php echo $tgl; ?>"></td>
	</tr>
	<tr>
		<td width="20%">Alamat</td>
		<td width="80%"><input type="text" name="alamat" size="80" required="" value="<?php echo $alamat; ?>"></td>
	</tr>
	<tr>
		<td width="20%">Agama</td>
		<td width="80%">
			<select name="agama">
				<option value="1" <?php if($agama=="1") echo "selected"; ?>>Islam</option>
				<option value="2" <?php if($agama=="2") echo "selected"; ?>>Kristen</option>
				<option value="3" <?php if($agama=="3") echo "selected"; ?>>Katholik</option>
				<option value="4" <?php if($agama=="4") echo "selected"; ?>>Hindu</option>
				<option value="5" <?php if($agama=="5") echo "selected"; ?>>Budha</option>
			</select>
		</td>
	</tr>
	<tr>
		<td width="20%">Kelamin</td>
		<td width="80%">
			<select name="kelamin">
				<option value="1" <?php if($kelamin=="1") echo "selected"; ?> >Pria</option>
				<option value="2" <?php if($kelamin=="2") echo "selected"; ?>>Wanita</option>
			</select>
		</td>
	</tr>
	<tr>
		<td width="20%">Nomor HP</td>
		<td width="80%"><input type="text" name="hp" size="80" required="" value="<?php echo $hp; ?>"></td>
	</tr>
	<tr>
		<td width="20%">Email</td>
		<td width="80%"><input type="email" name="mail" size="80" required="" value="<?php echo $mail; ?>"></td>
	</tr>
	<tr>
		<td width="20%">Nama Prodi</td>
		<td width="80%">
			<select name="prodi">
			    <option>--Pilih Prodi--</option> 
				<?php
				$qry="SELECT * from prodi";
				$res=mysqli_query($konek,$qry);
				while($brs=mysqli_fetch_array($res))
				{
				 if($prodi==$brs[0])	
				   echo "<option value='$brs[0]' selected>$brs[1]</option>";
				 else
				   echo "<option value='$brs[0]'>$brs[1]</option>";
				}
				?>
			</select>
		</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="save" value="Simpan"></td>
	</tr>
	</form>	
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
	$sql="UPDATE mahasiswa set nama='$nama',tgl_lahir='$tgl',alamat='$alamat',agama='$agama',kelamin='$kelamin',no_hp='$hp', email='$mail',id_prodi=$prodi where nim='$nim'";
	$hasil=mysqli_query($konek,$sql);
	if($hasil)
	{
		echo "<script language='JavaScript'>
		  (window.alert('Data Mahasiswa sudah diubah'))
		   location.href='mahasiswa.php'
		   </script>";
	}
	else
	{
		echo "<script language='JavaScript'>
		  (window.alert('Data Mahasiswa tidak dapat diubah'))
		   location.href='mahasiswa.php'
		   </script>";
	}	
}
?>
</body>
</html>