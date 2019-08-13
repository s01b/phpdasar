<?php
$mahasiswa = [
    ["Nasi Pecel", "1431110084", "Teknik Informatika", "pecel@email.com"],
    ["Soto Ayam", "1431110091", "Teknik Industri", "soto@email.com"],
    ["Bakso Solo", "1431110019", "Teknik Elektronika", "bakso"]
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar mahasiswa</title>
</head>

<body>
    <h1>Daftar mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama : <?= $mhs[0]; ?></li>
            <li>NIM : <?= $mhs[1]; ?></li>
            <li>Jurusan :<?= $mhs[2]; ?></li>
            <li>Email : <?= $mhs[3]; ?></li>
        </ul>
    <?php endforeach; ?>

</body>

</html>