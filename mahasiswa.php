<?php
include 'conf/koneksi.php';
error_reporting(0);
//
?>
<h2 align="center">DAFTAR MAHASISWA</h2>
<form method="POST" action="addmhs.php">
	<input type="submit" name="add" value="Add Mahasiswa">
</form>
<table border="1" width="90%" align="center">
	<caption>
		<form method="POST">
			<input type="text" name="kata" size="40">
			<input type="submit" name="cari" value="Search!">
		</form>
	</caption>
	<th width="5%">Nim</th>
	<th width="12%">Nama</th>
	<th width="7%">Tgl Lahir</th>
	<th width="12%">Alamat</th>
	<th width="8%">Agama</th>
	<th width="5%">Kelamin</th>
	<th width="10%">No HP</th>
	<th width="10%">Email</th>
	<th width="20%">Nama Prodi</th>
	<th width="10%">Action</th>
<?php
$kata=$_POST['kata'];
$sql="SELECT a.*,b.nama_prodi from mahasiswa a, prodi b where a.id_prodi=b.id_prodi and (a.nama like '%$kata%' or a.alamat like '%$kata%' or b.nama_prodi like '%$kata%')";
$result=mysqli_query($konek,$sql);
while($row=mysqli_fetch_array($result))
{
	$tgl=substr($row[2], 8,2)."-".substr($row[2], 5,2)."-".substr($row[2], 0,4);
	if($row[4]=="1")
		$agama="Islam";
	elseif($row[4]=="2")
		$agama="Kristen";
	elseif($row[4]=="3")
		$agama="Katholik";
	elseif($row[4]=="4")
		$agama="Hindu";
	else
		$agama="Budha";
	//
	if($row[5]=="1")
		$sex="Pria";
	else
		$sex="Wanita";
	//
	echo "<tr>";
	echo "<td align='center'>".$row[0]."</td>";
	echo "<td>".$row[1]."</td>";
	echo "<td>".$tgl."</td>";
	echo "<td>".$row[3]."</td>";
	echo "<td>".$agama."</td>";
	echo "<td>".$sex."</td>";
	echo "<td>".$row[6]."</td>";
	echo "<td>".$row[7]."</td>";
	echo "<td>".$row[9]."</td>";
	echo "<td align='center'>
			<a href='delmhs.php?id=$row[0]'>Delete</a> | 
			<a href='editmhs.php?id=$row[0]'>Edit</a>";
	echo "</tr>";
}
?>
</table>