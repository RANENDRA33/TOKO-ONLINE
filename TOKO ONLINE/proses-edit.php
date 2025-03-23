<?php
include("config.php");

if(isset($_POST['simpan'])){
    $id = $_POST['id'];
    $nama_produk = $_POST['nama_produk'];
    $harga = $_POST['harga'];
    $jumlah = $_POST['jumlah'];
    $tanggal = $_POST['tanggal'];
    $deskripsi = $_POST['deskripsi'];

    $nama_file = $_FILES['gambar']['name'];
    $gambar = $_POST['gambar_lama'];

    if($nama_file){
        $ekstensi_diperbolehkan = array('png','jpg');
        $x = explode('.', $nama_file);
        $ekstensi = strtolower(end($x));
        $ukuran = $_FILES['gambar']['size'];
        $file_tmp = $_FILES['gambar']['tmp_name'];

        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
            if($ukuran < 1044070){

                move_uploaded_file($file_tmp, 'assets/img/'.$nama_file);
                if ($nama_file!=$gambar) {
                unlink('assets/img/'.$gambar);
                }
                $gambar = $nama_file;

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
        }
    }
}
?>