<?php 
	if (!isset($_GET["jenis"])||
		!isset($_GET["Julukan"])||
		!isset($_GET["Hasil"])||
		!isset($_GET["Warna"])||
		!isset($_GET["Spesies"])) {
		header("Location: latihan1.php");
		exit;
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>detail mahasiswa</title>
</head>
<body>
	<ul>
		<li><img src="img/<?= $_GET["gambar"]; ?>"></li>
		<li><?= $_GET["jenis"]; ?></li>
		<li><?= $_GET["Julukan"]; ?></li>
		<li><?= $_GET["Hasil"]; ?></li>
		<li><?= $_GET["Warna"]; ?></li>
		<li><?= $_GET["Spesies"]; ?></li>
	</ul>
	<a href="latihan1.php">kembali ke halaman awal</a>
</body>
</html>