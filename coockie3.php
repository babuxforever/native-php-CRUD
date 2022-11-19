<h2>Coockie 3</h2>
<?php
error_reporting(0);
if(isset($_COOKIE['iduser']))
{
	#Menghapus isi coockie
	setcookie('iduser',"");
	setcookie('pin',"");

	echo "Anda sudah melakukan logout <br>";
	echo "Jika ingin login kembali klick <a href='coockie1.php'>Login</a><br>";
	echo "Untuk cek apakah cookie masih aktif klick <a href='coockie2.php'>Coockie 2</a>";
}
?>