<?php
include 'auth.php';
?>

<!DOCTYPE html>
<html>
<head>
	<!-- Csrf Token -->
	<meta name="csrf-token" content="<?= $_SESSION['csrf_token'] ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tugas Praktikum</title>
	<!-- Bootstrap -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<!-- Datatable -->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">

		<!-- JQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<!-- DataTable -->
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body style="background-color: cornsilk">

		<nav class="navbar navbar-dark bg-warning">
	  <a class="navbar-brand" href="index.php" style="color: #fff;">
	    Praktikum Pemrograman Web
	  </a>
	</nav>

	<div class="container">
		<h2 align="center" style="margin: 30px;">Tugas Minggu 4</h2>

<form method="post" class="form-data" id="form-data"> 
	<input type="hidden" name="id" id="id"> 
	<div class="row">
		<div class="col-sm-3">
			<div class="form-group">
				<label>Nama</label>
				<input type="hidden" name="id" id="id">
				<input type="text" name="nama" id="nama" class="form-control" required="true">
				<p class="text-danger" id="err_nama"></p>
			</div>
		</div>
        <div class="col-sm-3">
        	<div class="form-group">
				<label>Prodi</label>
				<select name="prodi" id="prodi" class="form-control" required="true">
					<option value=""></option>
					<option value="Aristetur">Aristetur</option>
					<option value="Arsitektur Lannskap">Arsitektur Lannskap</option>
					<option value="Teknik Biosistem">Tenik Biosistem</option>
					<option value="Teknik Fisika">Teknik Fisika</option>
					<option value="Teknik Geomatika">Teknik Geomatika</option>
					<option value="Teknik Sipil">Teknik Sipil</option>
					<option value="Teknik Informatika">Teknik Informatika</option>
					<option value="Teknik Telekomunikasi">Teknik Telekomunikasi</option>
					<option value="Teknik Kimia">Teknik Kimia</option>
					<option value="Teknik Elektro">Teknik Elektro</option>
					<option value="Kimia">Kimia</option>
					<option value="Fisika">Fisika</option>
					<option value="Biologi">Biologi</option>
					<option value="Farmasi">Farmasi</option>
				</select>
				<p class="text-danger" id="err_prodi"></p>
			</div>
        </div>
        <div class="col-sm-3">
        	<div class="form-group">
				<label>Tanggal Lahir</label>
				<input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" required="true">
				<p class="text-danger" id="err_tanggal_lahir"></p>
			</div>
        </div>
        <div class="col-sm-3">
        	<div class="form-group">
				<label>Jenis Kelamin</label><br>
				<input type="radio" name="jenkel" id="jenkel1" value="Laki-laki" required="true"> Laki-laki
				<input type="radio" name="jenkel" id="jenkel2" value="Perempuan"> Perempuan
			</div>
			<p class="text-danger" id="err_jenkel"></p>
        </div>
	</div>
	
	<div class="form-group">
		<label>Alamat</label>
		<textarea name="alamat" id="alamat" class="form-control" required="true"></textarea>
		<p class="text-danger" id="err_alamat"></p>
	</div>
	
	<div class="form-group">
		<button type="button" name="simpan" id="simpan" class="btn btn-primary">
			<i class="fa fa-save"></i> Simpan
		</button>
	</div>
</form>

<p class="text-danger" id="err_nama"></p>
        <hr>

		<div class="data"></div>
		
    </div>

    <div class="text-center">© <?php echo date('Y'); ?> Copyright:
	    <a href=""> Praktikum Pemweb</a>
	</div>

	<script type="text/javascript">
	$(document).ready(function(){
	    //Mengirimkan Token Keamanan
	    $.ajaxSetup({
	        headers : {
	            'Csrf-Token': $('meta[name="csrf-token"]').attr('content')
	        }
	    });

	    $('.data').load("data.php");
	    $("#simpan").click(function(){
	        var data = $('.form-data').serialize();
	        var jenkel1 = document.getElementById("jenkel1").value;
	        var jenkel2 = document.getElementById("jenkel2").value;
	        var nama = document.getElementById("nama").value;
	        var tanggal_lahir = document.getElementById("tanggal_lahir").value;
	        var alamat = document.getElementById("alamat").value;
	        var prodi = document.getElementById("prodi").value;

	        if (nama=="") {
	        	document.getElementById("err_nama").innerHTML = "Nama Mahasiswa Harus Diisi";
	        } else {
	        	document.getElementById("err_nama").innerHTML = "";
	        }
	        if (alamat=="") {
	        	document.getElementById("err_alamat").innerHTML = "Alamat Mahasiswa Harus Diisi";
	        } else {
	        	document.getElementById("err_alamat").innerHTML = "";
	        }
	        if (prodi=="") {
	        	document.getElementById("err_prodi").innerHTML = "prodi Mahasiswa Harus Diisi";
	        } else {
	        	document.getElementById("err_prodi").innerHTML = "";
	        }
	        if (tanggal_lahir=="") {
	        	document.getElementById("err_tanggal_lahir").innerHTML = "Tanggal Masuk Harus Diisi";
	        } else {
	        	document.getElementById("err_tanggal_lahir").innerHTML = "";
	        }
	        if (document.getElementById("jenkel1").checked==false && document.getElementById("jenkel2").checked==false) {
	        	document.getElementById("err_jenkel").innerHTML = "Jenis Kelamin Harus Dipilih";
	        } else {
	        	document.getElementById("err_jenkel").innerHTML = "";
	        }

	        if (nama!="" && tanggal_lahir!=""  && alamat!=""  && prodi!=""  && (document.getElementById("jenkel1").checked==true || document.getElementById("jenkel2").checked==true)) {
	        	$.ajax({
		            type: 'POST',
		            url: "form_action.php",
		            data: data,
		            success: function() {
		                $('.data').load("data.php");
		                document.getElementById("id").value = "";
		                document.getElementById("form-data").reset();
		            }, error: function(response){
			        console.log(response.responseText);
			    }
		        });
	        }
	        
	    });
	});
	</script>
</body>
</html>