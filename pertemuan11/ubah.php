<?php
require 'functions.php';

//ambil data di URL
$id = $_GET["id"];

//query data mahasiswa baru berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

//cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {


    //cek apakah data berhasil diubah
    if (ubah($_POST) > 0) {
        echo "
        <script>
            alert('data berhasil diubah');
            document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('data gagal diubah');
            document.location.href = 'index.php';
        </script>
        ";
    }
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit data mahasiswa</title>
</head>

<body>
    <h1>Ubah data mahasiswa</h1>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $mhs["id"] ?>">
        <ul>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" require value="<?= $mhs["nama"] ?>">
            </li>
            <li>
                <label for="nrp">NRP : </label>
                <input type="text" name="nrp" id="nrp" require value="<?= $mhs["nrp"] ?>">
            </li>
            <li>
                <label for=" email">Email : </label>
                <input type="text" name="email" id="email" require value="<?= $mhs["email"] ?>">
            </li>
            <li>
                <label for=" jurusan">Jurusan : </label>
                <input type="text" name="jurusan" id="jurusan" require value="<?= $mhs["jurusan"] ?>">
            </li>
            <li>
                <label for=" gambar">Gambar : </label>
                <input type="text" name="gambar" id="gambar" require value="<?= $mhs["gambar"] ?>">
            </li>
            <li>
                <button type=" submit" name="submit">Ubah Data</button>
            </li>
        </ul>
    </form>
</body>

</html>