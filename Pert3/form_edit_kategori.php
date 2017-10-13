<?php // filename: form_edit_kategori.php
include("koneksi.php");

$id = $_GET['id'];

$query = "SELECT * FROM kategori
		WHERE id=$id";
$hasil = mysqli_query($db, $query);

$row = mysqli_fetch_assoc($hasil);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Data Mahasiswa Kalbis</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" 
	integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" 
	crossorigin="anonymous">
	<style>
		#tbody{background:#000000;}
		#menu{background:#CCCCFF;}
		#konten{background:#CCCC33;}
		#filter{background:#33FFCC;}
		#search{background:#33FFCC;}
		#footer{background:cyan;}
	</style>
</head>
<body>
<h1>Phone Book</h1>
<div id="menu">
	<ul>
		<li><a href="index.php">Kontak</a></li>
		<li><a href="kategori.php">Kategori</a></li>
	</ul>
</div>
<div id="konten">
	<h2>Edit Kategori</h2>
	<form action="proses_edit_kategori.php" method="post">
		Keterangan:
		<input type="text" value="<?php echo $row['keterangan']; ?>" name="ket" />
		<br />
		<input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
		<input type="submit" value="Simpan" />
	</form>
</div>
</body>
</html>