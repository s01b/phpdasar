<?php 
$ayam =[
	[
		"jenis" => "Ayam Broiler",
		"Julukan" => "Ayam Sayur",
		"Hasil" => "Pedaging",
		"Warna" => "Putih",
		"Spesies" => "Gallus domesticus",
		"gambar" => "broiler.jpg"
	],
	[
		"jenis" => "Ayam Layer",
		"Julukan" => "Ayam Horn",
		"Hasil" => "Petelur",
		"Warna" => "Merah",
		"Spesies" => "Gallus domesticus",
		"gambar" => "Layer.jpg"
	],
	[
		"jenis" => "Ayam Kampung",
		"Julukan" => "Ayam Kampung",
		"Hasil" => "Pedaging",
		"Warna" => "Percampuran",
		"Spesies" => "Gallus domesticus",
		"gambar" => "kampung.jpg"
	],
	[
		"jenis" => "Ayam Pejantan",
		"Julukan" => "Ayam Pejantan", 
		"Hasil" => "Pedaging",
		"Warna" => "Merah",
		"Spesies" => "Gallus domesticus",
		"gambar" => "pejantan.png"
	]
]
?>

<!DOCTYPE html>
<html>
<head>
	<title>GET</title>
</head>
<body>
	<h1>Jenis Ayam Produksi</h1>
	<ul>
		<?php foreach($ayam as $ay) : ?>
			<li>
				<a href="latihan2.php?jenis=<?= $ay["jenis"]; ?>&Julukan=<?=$ay["Julukan"]; ?>&Hasil=<?=$ay["Hasil"]; ?>&Warna=<?=$ay["Warna"]; ?>&Spesies=<?=$ay["Spesies"];?>&gambar=<?=$ay["gambar"]; ?>"><?= $ay["jenis"]; ?></a>	
			</li> 
		<?php endforeach; ?>
	</ul>

</body>
</html>
