<?php 
include 'koneksi.php';
$nrp = $_POST['nrp'];
mysqli_query($koneksi,"delete from mahasiswa where nrp='$nrp'");
?>