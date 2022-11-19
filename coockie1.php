<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Session 1</title>
</head>
<body>
<h2>Coockie 1</h2>

<form method="POST" action="coockie1.php">
	UserId <input type="text" name="user" size="30"><br>
	Password <input type="password" name="pass" size="30"><br>
	<input type="submit" name="save" value="Login">
</form>
<?php
if(isset($_POST['save']))
{
  if($_POST['user']=="admin" and  $_POST['pass']=="12345")
  {
	echo "Anda sudah login <br>";
	#membuat Coockie
	setcookie('iduser',$_POST['user']);
	setcookie('pin',$_POST['pass']);
	#------
	echo "<a href='coockie2.php'>menuju ke Coockie 2</a>";
  }
  else
  {
  	echo "Userid/Password anda salah";
    echo "<a href='coockie1.php'> Kembali</a>";	
  }
}
?>
</body>
</html>