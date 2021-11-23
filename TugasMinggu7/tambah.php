<?php 

	require 'fungsi.php';

	//koneksi database
	$koneksi = mysqli_connect("localhost", "root", "", 'barang');

	//cek tombol submit
	if(isset($_POST["submit"])){

		//cek data berhasil di kirim
		if ( tambah($_POST) > 0 ) {
			echo "
				<script>
					alert('Berhasil');
					document.location.href = 'index.php';
				</script>
			";
		}
		else{
			echo "
				<script>
					alert('Gagal');
					document.location.href = 'index.php';
				</script>
			";
		}

	}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>TAMBAH DATA BARANG</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
	<nav class="navbar navbar-dark bg-primary">
	<h3>Tambah Data Barang</h3>
	</nav><br>

	
	<form action="" method="post" enctype="multipart/form-data">
		<div class="input-group mb-3">
		<ul>
			<li>
				<label for="nama">Nama Barang: </label><input type="text" name="nama" id="nama" required>
			</li><br>

			<li>
				<label for="berat">Berat Barang: </label><input type="text" name="berat" id="berat" required>
			</li><br>

			<li>
				<label for="harga">Harga Barang : </label><input type="text" name="harga" id="harga" required>
			</li><br>

			<li>
				<label for="alamat">Alamat Tujuan : </label><input type="text" name="alamat" id="alamat" required>
			</li><br>

			<li>
				<label for="gambar">Gambar : </label><input type="file" name="gambar" id="gambar">
			</li><br>

			
			<button type="submit" name="submit" class="btn btn-info">Kirim</button>
			

		</ul>


		</div>
	</form>


</body>
</html>