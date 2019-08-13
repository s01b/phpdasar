<?php 
require 'functions.php';
//cek apakah tombol submit sudah ditekan
if (isset($_POST["submit"])) {
	//cek apakah data berhasil ditambahkan
	if(tambah($_POST)>0){
		echo "<script>
			alert('Data berhasil ditambahkan');
			document.location.href = 'index.php';
		</script>";
	} else{
		echo "<script>
			alert('Data gagal ditambahkan');
			document.location.href = 'index.php';
		</script>";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Mahasiswa</title>
</head>
<body>
	<h1>Tambah Data Mahasiswa</h1>

	<form action="" method="post">
		
	<ul>
		<li>
			<label for="nama" >nama :</label>
			<input type="text" name="nama" id="nama" required="">
		</li>
		<li>
			<label for="nrp" >nrp :</label>
			<input type="text" name="nrp" id="nrp"> <!-- for pasangannya id -->			
		</li>		
		<li>
			<label for="email" >email :</label>
			<input type="text" name="email" id="email">
		</li>
		<li>
			<label for="jurusan" >jurusan :</label>
			<input type="text" name="jurusan" id="jurusan">
		</li>
		<li>
			<label for="gambar" >gambar :</label>
			<input type="text" name="gambar" id="gambar">
		</li>
		<li>
			<button type="submit" name="submit">Tambahkan Data</button>
		</li>
	</ul>

	</form>
</body>
</html>