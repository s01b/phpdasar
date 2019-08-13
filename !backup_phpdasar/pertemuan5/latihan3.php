<?php 
//array numerik = array yg indeksnya angka
$mahasiswa = [
	["Sokhib Sultoni", "1431110084", "Teknik Elektronika", "ssooiibb@gmail.com"],
	["Bejo Selalu", "1431110055", "Teknik Elektronika", "bejo@gmail.com"],
	["Rahmat Amin", "1431119876", "Teknik Elektronika", "rahmat.amin@gmail.com"]
];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Daftar mahasiswa</title>
</head>
<body>
<h1>Daftar mahasiswa</h1>

<?php foreach ($mahasiswa as $mhs) :?>
<ul>
	<li>Nama 	:<?= $mhs[0] ?></li>
	<li>NIM 	:<?= $mhs[1] ?></li>
	<li>Jurusan	: <?= $mhs[2] ?></li>
	<li>Email	: <?= $mhs[3] ?></li>
</ul>
<?php endforeach; ?>
</body>
</html>