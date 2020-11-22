<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
</head>
<body>
	<h1>Simpan Data Mahasiswa</h1>
	<?php
	$nrp=$_POST["nrp"];
	$nama=$_POST["nama"];
	$foto=$_POST["foto"];
	$jurusan=$_POST["jurusan"];
	$conn=mysqli_connect("localhost","root","")
	or die ("koneksi gagal");
	mysqli_select_db($conn, "mysqli"); 
	echo "NRP : $nrp <br>"; echo "Nama : $nama <br>"; echo "Foto : $foto <br>"; echo "Jurusan : $jurusan <br>";
	$sqlstr="insert into mahasiswa (NRP,Nama,Alamat,ID_Jur) values ('$nrp', '$nama', '$foto', '$jurusan')";
	$hasil= mysqli_query($conn, $sqlstr);
	echo "Simpan data mahasiswa berhasil dilakukan";
	?>
</body>
</html>