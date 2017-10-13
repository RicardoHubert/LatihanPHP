<?php // filename: koneksi.php


// 1. Koneksi
$db = mysqli_connect("localhost", "root", "", "kalbis_new");

if(mysqli_connect_errno()){
	die(mysqli_connect_error());
}