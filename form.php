<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
<form method="POST" action="form.php">
	Nim <input type="text" name="nim" size="40" required><br>
	Nama <input type="text" name="nama" size="40" required><br>
	Kelamin <input type="radio" name="kelamin" value="P">Pria
			<input type="radio" name="kelamin" value="W">Wanita<br>
	Hoby <input type="checkbox" name="hobi1" value="Renang">Renang
		 <input type="checkbox" name="hobi2" value="Futsal">Futsal
		 <input type="checkbox" name="hobi3" value="Membaca">Membaca
	<input type="submit" name="cek" value="Proses">
</form>
<?php
if(isset($_POST['cek']))
{
$nim=$_POST['nim'];
$nama=$_POST['nama'];
$kelamin=$_POST['kelamin'];
$hobi1=$_POST['hobi1'];
$hobi2=$_POST['hobi2'];
$hobi3=$_POST['hobi3'];
echo "Nim : $nim <br>";
echo "Nama : $nama <br>";
echo "Kelamin : $kelamin <br>";
echo "Hoby : $hobi1 - $hobi2 - $hobi3";
}
?>
<script src="js/jquery-3.4.1.js" type="text/javascript"></script>
<script src="js/popper.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>