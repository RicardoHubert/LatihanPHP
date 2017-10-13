<?php 

include("koneksi.php");
$query = "SELECT * FROM kontak";
$hasil = mysqli_query($db, $query);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Data Mahasiswa Kalbis</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" 
	integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" 
	crossorigin="anonymous">
	<style>
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
	<h2>Kategori</h2>
	<a href="form_tambah_kontak.php">Tambah Kategori</a>
	<table border="1">
		<thead>
			<tr>
				<th>No.</th>
				<th>Nama</th>
				<th>Hp.</th>
				<th>Email</th>
				<th>Kategori</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php
	
			while($row = mysqli_fetch_assoc($hasil)){
			?>
			<tr>
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['nama']; ?></td>
				<td><?php echo $row['phone']; ?></td>
				<td><?php echo $row['email']; ?></td>
				<td><?php echo $row['kategori_id']; ?></td>
				<td>
					<a href="form_edit_kontak.php?id=<?php echo $row['id'];?>">Edit</a> | 
					<a href="delete_kontak.php?id=<?php echo $row['id'];?>">Delete</a>
				</td>
			
			</tr>
			<?php
			}
			?>
		</tbody>
	</table>
</div>
</html>