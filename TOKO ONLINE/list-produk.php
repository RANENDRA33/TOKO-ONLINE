<?php 
include("config.php"); 
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <title>MADANI COLLECTION</title>
</head>
<body class="bg-secondary">
    <?php
    include "navbar.php";
    ?>
    <div class="container mt-5">
        <div class="jumbotron bg-secondary">
            <?php
            if (!isset($_SESSION['username'])) {
                echo "<div class=\"alert alert-danger text-center mt-5 mb-5\" role=\"alert\" style=\"height:150px;\">Anda belum login<a href=\"login.php\"><br><a href=\"login.php\" class=\"btn btn-md btn-primary\">Ok</a></div>" ;
            } else {
                ?>
                <div class="card-header bg-info text-white text-center" style="font-size: 30px;">Daftar Produk</div>
                <div class="table table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                           <tr>
                               <th>No</th>
                               <th style="width: 15%;">Nama Produk</th>
                               <th>Harga</th>
                               <th>Jumlah</th>
                               <th>Tanggal</th>
                               <th style="width: 20%;">Deskripsi</th>
                               <th>Gambar Produk</th>
                           </tr>
                       </thead>
                       <tbody>
                           <?php
                           $urutan =1;
                           $sql = "SELECT * FROM table_produk ORDER BY nama_produk ASC";
                           $query = mysqli_query($db, $sql);
                           while($produk = mysqli_fetch_array($query)){

                               echo "<tr>";
                               echo "<td>".$urutan."</td>";
                               echo "<td>".$produk['nama_produk']."</td>";
                               echo "<td>Rp. ".number_format($produk['harga'], 2, ",", ".")."</td>";
                               echo "<td>".$produk['jumlah']."</td>";
                               echo "<td>".date("d/m/Y", strtotime($produk['tanggal']))."</td>";
                               echo "<td>".$produk['deskripsi']."</td>";
                               echo "<td class='text-center'><img src='assets/img/".$produk['gambar']."' width='120px' /></td>";

                               echo "</td>";
                               echo "</tr>";
                               $urutan++;
                           }
                           ?>
                       </tbody>
                   </table>
                   <br>
                   <p class="text-white">Total: <?php echo mysqli_num_rows($query) ?></p>
               </div>
               <?php
           }
           ?>
       </div>
   </div>

   <?php
   include"footer.php";
   ?>
   <script type="text/javascript" src="assets/js/jquery-3.6.0.min.js"></script>
   <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

</body>
</html>
