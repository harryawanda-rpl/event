<?php

include("config.php");

if(isset($_POST['update'])){

	$id = $_POST['id_acara'];
	$nama_acara = $_POST['nama_acara'];
	$tanggal_acara = $_POST['tanggal_acara'];
	$lokasi = $_POST['lokasi'];

	$sql = "UPDATE acara SET nama_acara='$nama_acara', tanggal_acara='$tanggal_acara',
	lokasi='$lokasi' WHERE id_acara=$id";
	$query = mysqli_query($db, $sql);

	if( $query ) {
		header('Location: index.php');
	} else {
		die("Gagal menyimpan perubahan...");
	}
} else {
    die("Akses dilarang...");
}

?>