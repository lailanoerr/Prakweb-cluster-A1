<!DOCTYPE html>
<html>
<head>
    <title>Koneksi Database MySQLi</title>
</head>
<body>
    <h1>Demo Koneksi Database</h1>
    <?php
    $koneksi=mysqli_connect("localhost", "root", "", "mysqli");
    if(mysqli_connect_errno()){
    	echo "Koneksi database gagal : " .mysqli_connect_error();
    }else{
    	echo "Sukses";
    }
    ?>
</body>
</html>