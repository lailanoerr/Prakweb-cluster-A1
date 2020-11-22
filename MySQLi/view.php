<?php
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn, "tamu");
$hasil=mysqli_querry($conn, "select * form bukutamu ");
$jumlah=mysqli_num_rows($hasil);
echo "<center>Daftar Pengujung</center>";
echo "Jumlah Pengunjung : $jumlah"; 
$a=1;
while($baris=mysql_fetch_array($hasil)){
	echo "<br>";
	echo $a;
	echo "<br>"; echo "Nama : "; echo $baris[0]; echo "<br>";
	echo "Email : "; 
	echo $baris[1]; 
	echo "<br>";
	echo "Komentar : ";
	echo $baris[2];
	$a++;
}
?>