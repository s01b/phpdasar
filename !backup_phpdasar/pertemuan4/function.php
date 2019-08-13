<?php 

Function salam($waktu, $nama){

	return "Selamat datang, $nama!";
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Latihan Function</title>
</head>
<body>
	<h1><?= salam("Sokhib") ?></h1>
</body>
</html>