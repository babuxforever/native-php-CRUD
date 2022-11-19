<h2>Session 2</h2>
<?php
error_reporting(0);
#Membuka Session
session_start();

#Membaca Session
$user=$_SESSION['iduser'];
$passw=$_SESSION['pin'];
if(!empty($user))
{
	echo "Hallo, ".$user;
	echo "<br>Selamat anda sudah berhasil Login";
	echo "<br>Jika anda ingin keluar klick <a href='session3.php'>Logout</a>";
}
else
{
	echo "Anda belum Login";
	echo "<br>Jika anda ingin masuk klick <a href='session1.php'>Login</a>";
}
?>
