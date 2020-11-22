<!DOCTYPE html>
<html>
<head>
	<title>Latihan 2</title>
</head>
<body>
	<h2>======================================================</h2>
	<h2>Menghitung Harga Bet Berdasarkan Panjang Nama</h2>
	<h2>======================================================</h2>
	<form method="POST" action="">
		<label>Nama : </label>
		<input type="text" name="nama"><br>
		<label>Warna : </label>
        <select name="warna" id="">
        <option value="red">Red</option>
        <option value="black">Black</option>
        <option value='yellow'>Yellow</option>
        <option value='blue'>Blue</option>
        <option value='green'>Green</option>

		<input type="submit" value="Kirim" name="proses">
	</form>
	<?php 
		if(isset($_POST['proses'])){
        $n= $_POST['nama'];
        $color = $_POST['warna'];
        
		function hitung($n){
			if($n>20){
				return (strlen($n) * 700);
			}else if($n<20 && $n>10){ 
				return (strlen($n) * 500);
			}else{
				return (strlen($n) * 300);
			}
		}
        $perhitungan=hitung($n);
        echo "<br>";
		echo "<font color=$color>Namanya adalah : $n</font><br>";
		echo "<br>";
        echo "<font>Harganya adalah : $perhitungan</font>";
    }
	 ?>
</body>
</html>