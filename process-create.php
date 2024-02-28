<?php

include("config.php");

if(isset($_POST['create'])){

	$nama_acara = $_POST['nama_acara'];
	$tanggal_acara = $_POST['tanggal_acara'];
	$lokasi = $_POST['lokasi'];

	$sql = "INSERT INTO acara (nama_acara, tanggal_acara, lokasi)
	VALUE ('$nama_acara', '$tanggal_acara', '$lokasi')";

	$query = mysqli_query($db, $sql);
	
	if( $query ) {
		header('Location: index.php?status=sukses');
	} else {
		header('Location: index.php?status=gagal');
	}
} else {
	die("Akses dilarang...");
}

?>