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
		<div class="row">
			<div class="col-lg-8 m-auto">
				<?php
				if (!isset($_SESSION['username'])) {
					echo "<div class=\"alert alert-danger text-center mt-5 mb-5\" role=\"alert\" style=\"height:150px;\">Anda belum login<a href=\"login.php\"><br><a href=\"login.php\" class=\"btn btn-md btn-primary\">Ok</a></div>" ;
				} else {
					?>
					<div class="jumbotron">
						<header>
							<h3>FORM PRODUK</h3>
						</header>
						<form action="prosestambah-produk.php" method="POST" enctype="multipart/form-data">
							<fieldset>
								<div class="form-group">
									<label for="nama_produk">Nama Produk</label>
									<select class="form-control" name="nama_produk" required>
										<option>HIJAB</option>
										<option>WOMAN'S CLOTHES</option>
										<option>MEN'S CLOTHES</option>
										<option>FLATSHOES</option>
										<option>SNEAKERS</option>
										<option>WOMEN'S BAG</option>
										<option>MEN'S BAG</option>
									</select>
								</div>
								<div class="form-group">
									<label for="harga">Harga</label>
									<input class="form-control" type="number" name="harga" placeholder="Harga Produk">
								</div>
								<div class="form-group">
									<label for="jumlah">Jumlah</label>
									<input class="form-control" type="number" name="jumlah" placeholder="Jumlah Produk">
								</div>
								<div class="form-group">
									<label for="tanggal">Tanggal</label>
									<input class="form-control" type="date" name="tanggal">
								</div>
								<div class="form-group">
									<label for="deskripsi">Deskripsi</label>
									<textarea class="form-control" name="deskripsi"></textarea>
								</div>
								<div class="form-group">
									<label for="formControlFile1">Gambar Produk</label>
									<input type="file" name="gambar" class="form-control-file" id="formControlFile1" >
								</div>

								<div class="form-group">
									<input class="btn btn-md btn-primary" input type="submit" value="Tambah" name="tambah">
								</div>
							</fieldset>
						</form>
					</div>
					<?php
				}
				?>
			</div>
		</div>
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