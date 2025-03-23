<?php
include("config.php");

if (isset($_POST['register'])) {
	$nama = $_POST['nama'];
	$username = $_POST['username'];
	$password = md5($_POST['password']);

	$sql ="INSERT INTO tabel_user (nama, username, password) VALUE ('$nama','$username','$password')";
	$query = mysqli_query($db, $sql);

	if ($query) {
		header("location: login.php");
	} else{
		header("location: register.php");
	}
} else {
	die("Akses dilarang..");
}
?>