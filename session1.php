<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Session 1</title>
</head>
<body>
<h2>Session 1</h2>

<form method="POST" action="session1.php">
	UserId <input type="text" name="user" size="30"><br>
	Password <input type="password" name="pass" size="30"><br>
	<input type="submit" name="save" value="Login">
</form>
<?php
#Membuka Session
session_start();
if(isset($_POST['save']))
{
  if($_POST['user']=="admin" and  $_POST['pass']=="12345")
  {
	echo "Anda sudah login <br>";
	#membuat Session
	$_SESSION['iduser']=$_POST['user'];
	$_SESSION['pin']=$_POST['pass'];
	#------
	echo "<a href='session2.php'>menuju ke Session 2</a>";
  }
  else
  {
  	echo "Userid/Password anda salah";
    echo "<a href='session1.php'> Kembali</a>";	
  }
}
?>
</body>
</html>