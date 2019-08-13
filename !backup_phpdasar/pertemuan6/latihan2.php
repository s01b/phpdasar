<?php 
// $mahasiswa = [
// 	["Anwar Paiman", "1931110084", "Teknik Informatika", "anwar.pmn@gmail.com"],
// 	["Soto Ayam", "193400674", "Teknik Informatika", "soto.aym@gmail.com"]
// ];

$mahasiswa = [
	[
		"nama" => "Anwar Paiman",
		"nim" => "1931110084",
		"jurusan" => "Teknik Informatika",
		"email" => "anwar.pmn@gmail.com",
		"gambar" => "bruno.jpg"
	],
	[
		"nama" => "Maya Otos",
		"nim" => "193400674",
		"jurusan" => "Teknik Informatika",
		"email" => "maya.ots@gmail.com",
		"gambar" => "tenyom.png"
	],
	[
		"nama" => "Oskab Olos",
		"nim" => "1930000657",
		"jurusan" => "Teknik Elektronika",
		"email" => "oskab.o@gmail.com",
		"gambar" => "wajah.jpg"
	]
];


?>

<!DOCTYPE html>
<html>
<head>
	<title>Daftar Mahasiswa</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>
<?php foreach ($mahasiswa as $mhs) : ?>
<ul>
	<li>
		<img src="img/<?= $mhs["gambar"]; ?>">
	</li>
	<li><?=$mhs["nama"];?></li>
	<li><?=$mhs["nim"];?></li>
	<li><?=$mhs["jurusan"];?></li>
	<li><?=$mhs["email"];?></li>
</ul>
<?php endforeach; ?>

</body>
</html>