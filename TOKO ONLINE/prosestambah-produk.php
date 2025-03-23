<?php 
include("config.php");

if ($_SERVER["REQUEST_METHOD"]== "POST") {
	$nama_produk = trim($_POST['nama_produk']);
	$harga = trim($_POST['harga']);
	$jumlah = trim($_POST['jumlah']);
	$tanggal = trim($_POST['tanggal']);
	$deskripsi = trim($_POST['deskripsi']);
	$gambar = trim($_FILES['gambar']['name']);

	if ($gambar != "") {
		$ekstensi_diperbolehkan = array('png','jpg');
		$x = explode('.', $gambar);
		$ekstensi = strtolower(end($x));
		$ukuran	= $_FILES['gambar']['size'];
		$file_tmp = $_FILES['gambar']['tmp_name'];
		$angka_acak = rand(1,999);
		$nama_gambar_baru = $angka_acak.'.'.$gambar;


		if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
			if($ukuran < 1044070){
				move_uploaded_file($file_tmp, 'assets/img/'.$nama_gambar_baru);

				$sql ="INSERT INTO table_produk (nama_produk, harga, jumlah, tanggal, deskripsi, gambar) VALUE ('$nama_produk','$harga','$jumlah','$tanggal','$deskripsi','$nama_gambar_baru')";
				$query = mysqli_query($db, $sql);

				if($query) {
					header('location: index.php?status=sukses');
				}else {
					header('location: index.php?status=gagal');
				}
			}else{
				echo 'Ukuran file terlalu besar!!';
			}
		}else{
			echo 'Extensi file tidak didukung!!';
		}
	} else {
		die("akses dilarang");
	}
}

?>
