<?php
$server = "localhost";
$user = "root";
$password = "";
$nama_database = "produk";

$db = mysqli_connect($server, $user, $password, $nama_database);
 if (!$db) {
 	die("gagal terhubung kedatabase". mysqli_connect_error());
 }
?>