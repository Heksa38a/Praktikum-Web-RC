<?php 

	require 'fungsi.php';


	//ambil data di url
	$id = $_GET["id"];
	
	// query berdasarkan id
	$dta = query("SELECT * FROM data_barang WHERE id = $id")[0];

	//cek tombol submit
	if(isset($_POST["submit"])){

		//cek data berhasil di update
		if ( ubah($_POST) > 0 ) {
			echo "
				<script>
					alert('Berhasil Diupdate');
					document.location.href = 'index.php';
				</script>
			";
		}
		else{
			echo "
				<script>
					alert('Gagal Diupdate');
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
	<title>UPDATE DATA BARANG</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
	<nav class="navbar navbar-dark bg-primary">
	<h2>Update Data Barang</h2>
	</nav><br>

	<form action="" method="post" enctype="multipart/form-data">
		<div class="input-group mb-3">
		<input type="hidden" name="id" value="<?= $dta["id"]; ?>">
		<input type="hidden" name="gambarlama" value="<?= $dta["gambar"]; ?>">
		<ul>
			<li>
				<label for="nama">Nama : </label><input type="text" name="nama" id="nama" required value="<?= $dta["nama"] ?>">
			</li><br>

			<li>
				<label for="berat">Berat : </label><input type="text" name="berat" id="berat" required value="<?= $dta["berat"] ?>">
			</li><br>

			<li>
				<label for="harga">Harga : </label><input type="text" name="harga" id="harga" required value="<?= $dta["harga"] ?>">
			</li><br>

			<li>
				<label for="alamat">Alamat : </label><input type="text" name="alamat" id="alamat" required value="<?= $dta["alamat"] ?>">
			</li><br>

			<li>
				<br><label for="gambar">Gambar : </label>
				<img src="img/<?= $dta['gambar']; ?>">
				<input type="file" name="gambar" id="gambar">
			</li><br>

			
			<button type="submit" name="submit" class="btn btn-warning">Update</button>
			

		</ul>
		</div>
		

	</form>


</body>
</html>