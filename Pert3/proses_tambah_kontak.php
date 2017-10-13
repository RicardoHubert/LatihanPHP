<?php

include("koneksi.php");
$nama = mysqli_real_escape_string($db, $_POST['nama']);
$phone = mysqli_real_escape_string($db, $_POST['phone']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$kategori = mysqli_real_escape_string($db, $_POST['kategori']);
$query = "INSERT INTO kontak (nama, phone, email, kategori_id) VALUES ('$_POST[nama]','$_POST[phone]','$_POST[email]','$_POST[kategori]')";
 
mysqli_query($db,$query);
header('Location: index.php');
?>