<?php
$mahasiswa = [
    [
        "nama" => "sokhib sultoni",
        "NIM" => 1431110084,
        "jurusan" => "teknik elektronika",
        "email" => "ssooiibb@gmail.com",
        "gambar" => "wajah.jpg"
    ],
    [
        "nama" => "ayam horn",
        "NIM" => 1431110031,
        "jurusan" => "teknik informatika",
        "email" => "ayam@gmail.com",
        "gambar" => "tuman.jpg"
    ]

]
?>


<!DOCTYPE html>
<html lang="en">
1

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Associative Array</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>">
            </li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NIM :<?= $mhs["NIM"]; ?></li>
            <li>Jurusan :<?= $mhs["jurusan"]; ?></li>
            <li>Email :<?= $mhs["email"]; ?></li>
        </ul>
    <?php endforeach; ?>

</body>

</html>