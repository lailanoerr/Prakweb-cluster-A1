<?php
$kolom=$_POST['kolom'];
$cari=$_POST['cari'];
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn, "mysqli");
$hasil=mysqli_querry($conn, "select * form mahasiswa where $nama like '%$cari%'");
$jumlah=mysqli_num_rows($hasil);
echo "<br>";
echo "Ditemukan: $jumlah"; echo "<br>";
while($baris=mysql_fetch_array($hasil)){
	echo "NRP : "; echo $baris[0]; echo "<br>";
	echo "Nama : "; echo $baris[1]; echo "<br>";
    echo "Foto : "; echo $baris[2]; echo "<br>";
    echo "Jurusan : "; echo $baris[3]; echo "<br>";
}
?>