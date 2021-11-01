<?php
session_start();
include 'koneksi.php';
include 'csrf.php';

$id = stripslashes(strip_tags(htmlspecialchars($_POST['id'] ,ENT_QUOTES)));
$nama = stripslashes(strip_tags(htmlspecialchars($_POST['nama'] ,ENT_QUOTES)));
$jenkel = stripslashes(strip_tags(htmlspecialchars($_POST['jenkel'] ,ENT_QUOTES)));
$alamat = stripslashes(strip_tags(htmlspecialchars($_POST['alamat'] ,ENT_QUOTES)));
$prodi = stripslashes(strip_tags(htmlspecialchars($_POST['prodi'] ,ENT_QUOTES)));
$tanggal_lahir = stripslashes(strip_tags(htmlspecialchars($_POST['tanggal_lahir'] ,ENT_QUOTES)));

if ($id == "") {
	$query = "INSERT into tbl_mahasiswa (nama, alamat, prodi, jenis_kelamin, tgl_lahir) VALUES (?, ?, ?, ?, ?)";
	$dewan1 = $db1->prepare($query);
	$dewan1->bind_param("sssss", $nama, $alamat, $prodi, $jenkel, $tanggal_lahir);
	$dewan1->execute();
} else {
	$query = "UPDATE tbl_mahasiswa SET nama=?, alamat=?, prodi=?, jenis_kelamin=?, tgl_lahir=? WHERE id=?";
	$dewan1 = $db1->prepare($query);
	$dewan1->bind_param("sssssi", $nama, $alamat, $prodi, $jenkel, $tanggal_lahir, $id);
	$dewan1->execute();
}

echo json_encode(['success' => 'Sukses']);

$db1->close();
?>