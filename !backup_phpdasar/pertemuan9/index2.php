<?php 
//koneksi ke database
$conn = mysqli_connect("localhost","root","","phpdasar");
//ambil data dari tabel mahsiswa/query data maahsiswa
$result = mysqli_query($conn,"SELECT * FROM mahasiswa");

//ambil data (fetch) mahasiswa dari object result 
// mysqli_fetch_row() -> mengembalikan array numerik (array angka)
// mysqli_fetch_assoc() -> mengembalikan nilai associative
// msqli_fetch_array() -> mengembalikan keduanya
// mysqli_fetch_object()

// $mhs = mysqli_fetch_assoc($result);
// var_dump($mhs["gambar"]);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<table border="1" cellpadding="10" cellspacing="0">

	<tr>
		<th>No.</th>
		<th>Aksi</th>
		<th>Gambar</th>
		<th>NIM</th>
		<th>Nama</th>
		<th>Email</th>
		<th>Jurusan</th>
	</tr>

	<?php $i = 1; ?>
	<?php while($row = mysqli_fetch_assoc($result)) :?>
	
	<tr>
		<td><?= $i; ?></td>
		<td>
			<a href="">Ubah</a> |
			<a href="">Hapus</a>
		</td>
		<td><img src="img/<?= $row["gambar"];?>"></td>
		<td><?= $row["nrp"]; ?></td>
		<td><?= $row["nama"]; ?></td>
		<td><?= $row["email"]; ?></td>
		<td><?= $row["jurusan"]; ?></td>
	</tr>
	<?php $i++ ?>
	<?php endwhile; ?>
</table>

</body>
</html>