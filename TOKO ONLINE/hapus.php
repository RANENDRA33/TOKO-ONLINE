<?php
include("config.php");

if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$gambar = $_GET['gambar'];
	$sql = "DELETE FROM table_produk WHERE id=$id";
	$query = mysqli_query($db, $sql);

	if($query) {
		unlink("assets/img/".$gambar);
		header('location: list-produk.php');
	} else {
		die("gagal menghapus...");
	}
} else {
	die("akses dilarang...");
}
?>