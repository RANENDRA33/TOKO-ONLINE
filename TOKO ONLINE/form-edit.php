<?php
include("config.php");
if( !isset($_GET['id']) ){
 header('Location: list-produk.php');
}
$id = $_GET['id'];

$sql = "SELECT * FROM table_produk WHERE id=$id";
$query = mysqli_query($db, $sql);
$produk = mysqli_fetch_assoc($query);

if( mysqli_num_rows($query) < 1 ){
 die("data tidak ditemukan...");
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <title>MADANI COLLECTION</title>
</head>
<body class="bg-dark">
    <?php
    include "navbar.php";
    ?>
    <div class="container mt-5">
        <div class="col-lg-12 m-auto">
            <div class="jumbotron">
                <header>
                    <h3>Formulir Edit Produk</h3>
                </header>
                <form action="proses-edit.php" method="POST" enctype="multipart/form-data">
                    <fieldset>
                        <input type="hidden" name="id" class="form-control" value="<?php echo $produk['id'] ?>" />
                        <div class="form-group">
                            <label for="nama_produk">Nama Produk: </label>
                            <input class="form-control" type="text" name="nama_produk" placeholder="nama lengkap" value="<?php echo $produk['nama_produk'] ?>" />
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga: </label>
                            <input class="form-control" type="number" name="harga" value="<?php echo $produk['harga'] ?>" />
                        </div>
                        <div class="form-group">
                            <label for="jumlah">Jumlah: </label>
                            <input class="form-control" type="number" name="jumlah" value="<?php echo $produk['jumlah'] ?>" />
                        </div>
                        <div class="form-group">
                            <label for="tanggal">Tanggal: </label>
                            <input class="form-control" type="date" name="tanggal" value="<?php echo $produk['tanggal'] ?>" />
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi: </label>
                            <textarea class="form-control" name="deskripsi"><?php echo $produk['deskripsi'] ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="formControlFile1">Gambar Produk</label>
                            <input type="hidden" name="gambar_lama" value="<?php echo $produk['gambar'];?>">
                            <input class="form-control-file" type="file" name="gambar" id="formControlFile1" accept=".png, .jpg, .jpeg" />
                        </div>
                        <div class="form-group">
                            <input class="btn btn-md btn-success" input type="submit" value="Simpan" name="simpan" />
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    <?php
    include "footer.php";
    ?>
    <script type="text/javascript" src="assets/js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>