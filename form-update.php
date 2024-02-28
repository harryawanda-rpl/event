<?php
include("config.php");
if( !isset($_GET['id']) ){
	header('Location: index.php');
}

$id = $_GET['id'];
$sql = "SELECT * FROM acara WHERE id_acara=$id";
$query = mysqli_query($db, $sql);
$data = mysqli_fetch_assoc($query);

if( mysqli_num_rows($query) < 1 ){
	die("data tidak ditemukan...");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>DATA</title>
</head>
<body>
	<h3>Update Data</h3>
	<form action="process-update.php" method="POST">
		<table border="0">
			<tr>
				<td></td>
				<td><input type="hidden" name="id_acara" value="<?php echo $data['id_acara'] ?>" /></td>
			</tr>
			<tr>
				<td>Nama Acara</td>
				<td><input type="text" name="nama_acara" value="<?php echo $data['nama_acara'] ?>" class="form-control"></td>
			</tr>
			<tr>
				<td>Tanggal Acara</td>
				<td><input type="text" name="tanggal_acara" value="<?php echo $data['tanggal_acara'] ?>" class="form-control"></td>
			</tr>
			<tr>
				<td>Lokasi</td>
				<td><input type="text" name="lokasi" value="<?php echo $data['lokasi'] ?>" class="form-control"></td>
			</tr>
			<tr>
				<td>&nbsp</td>
			</tr>
		</table>
		<button type="submit" name="update" class="btn btn-primary">Simpan</button>
	</form>
</body>
</html>