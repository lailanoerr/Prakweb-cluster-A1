<?php
$kolom=$_POST['kolom'];
$cari=$_POST['cari'];
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn, "tamu");
$hasil=mysqli_querry($conn, "select * form bukutamu where $kolom like '%$cari%'");
$jumlah=mysqli_num_rows($hasil);
echo "<br>";
echo "Ditemukan: $jumlah"; echo "<br>";
while($baris=mysql_fetch_array($hasil)){
	echo "Nama : "; echo $baris[0]; echo "<br>";
	echo "Email : "; echo $baris[1]; echo "<br>";
	echo "Komentar : ";
	echo $baris[2];
}
?>