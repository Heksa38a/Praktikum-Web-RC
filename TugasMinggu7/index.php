<?php  
	//koneksi ke database
	require 'fungsi.php';
	require 'bootstrap.html';
	$data_barang = query("SELECT * FROM data_barang ORDER BY id ASC");

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>DATA</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
	
	<h1>Daftar Barang</h1>
	<button type="button" class="btn btn-success">
	<a href="tambah.php">Tambah Data Barang</a>
	</button>


	<br><br>

	
	<br>

	<table class="table table-info table-striped">

		<thead class="table-dark">
		<tr>
			<th scope="col">No.</th>
			<th scope="col">Aksi</th>
			<th scope="col">Gambar Barang</th>
			<th scope="col">Berat Barang</th>
			<th scope="col">Nama Barang</th>
			<th scope="col">Harga Barang</th>
			<th scope="col">Alamat Tujuan</th>
		</tr>
		</thead>

		<tbody>
		<?php $i = 1; ?>
		<?php foreach ( $data_barang as $row ):?>

		<tr>
			<td><?= $i; ?></td>
			<td>
				<button type="button" class="btn btn-warning">
				<a href="ubah.php?id=<?= $row["id"]; ?> ">Ubah</a>
				</button>
				<button type="button" class="btn btn-danger"> 
				<a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Apakah anda yakin akan menghapus? ')">Hapus</a>
				</button>
			</td>
			<td><img src="img/<?= $row["gambar"]; ?>" width="80"></td>
			<td><?= $row["berat"]; ?></td>
			<td><?= $row["nama"]; ?></td>
			<td><?= $row["harga"]; ?></td>
			<td><?= $row["alamat"]; ?></td>
		</tr>
		<?php $i++; ?>
		<?php endforeach; ?>
		</tbody>
	</table>
</body>
</html>