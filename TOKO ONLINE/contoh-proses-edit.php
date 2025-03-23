<?php
include("config.php");

if(isset($_POST['simpan'])){
    $id = $_POST['id'];
    $nama_produk = $_POST['nama_produk'];
    $harga = $_POST['harga'];
    $jumlah = $_POST['jumlah'];
    $tanggal = $_POST['tanggal'];
    $deskripsi = $_POST['deskripsi'];
    $gambar = $_POST['gambar'];

        $sql ="UPDATE table_produk SET nama_produk='$nama_produk', harga='$harga', jumlah='$jumlah', tanggal='$tanggal', deskripsi='$deskripsi', gambar='$gambar' WHERE id=$id";
        $query = mysqli_query($db, $sql);
        if( $query ) {
            header('Location: list-produk.php');
        } else {
            die("Gagal menyimpan perubahan...");
        }
    } else {
        die("Akses dilarang...");
    }
?>