<h2>Session 3</h2>
<?php
error_reporting(0);
#Membuka Session
session_start();
if(isset($_SESSION['iduser']))
{
	#unset($_SESSION['iduser']); #Akan menghapus session iduser
	#$unset($_SESSION); #Akan menghapus semua session
	session_destroy(); #Akan menghapus semua session

	echo "Anda sudah melakukan logout <br>";
	echo "Jika ingin login kembali klick <a href='session1.php'>Login</a><br>";
	echo "Untuk cek apakah Session masih aktif klick <a href='session2.php'>Session 2</a>";
}
?>