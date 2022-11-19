<h2>Coockie 2</h2>
<?php
error_reporting(0);
#Membaca Coockie
$user=$_COOKIE['iduser'];
$passw=$_COOKIE['pin'];
if(!empty($user))
{
	echo "Hallo, ".$user;
	echo "<br>Selamat anda sudah berhasil Login";
	echo "<br>Jika anda ingin keluar klick <a href='coockie3.php'>Logout</a>";
}
else
{
	echo "Anda belum Login";
	echo "<br>Jika anda ingin masuk klick <a href='coockie1.php'>Login</a>";
}
?>
