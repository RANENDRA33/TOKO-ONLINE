<!DOCTYPE html>
<html>
<head>
	<title>MADANI COLLECTION</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body>
	<?php
	include("navbar.php")
	?> 
	<div class="container mt-3">
		<div class="row">
			<div class="col-lg-4">
				<div class="card mb-3" style="max-width: 20rem;">
					<div class="card-body text-dark">
						<h4 class="card-title">Gelombang 1</h4>
						<p class="card-text" style="color: green;">Tanggal 01-01-2021 sd 01-02-2021</p>
					</div>
				</div>
				<div class="card text-dark mb-3" style="max-width: 20rem;">
					<div class="card-header bg-default">Syarat Umum</div>
					<div class="card-body">
						<li>Mengisi formulir secara online</li>
						<li>Menyerahkan berkas yang ditentukan</li>
					</div>
				</div>
			</div>
			<div class="col-lg-8">
				<div class="jumbotron body class="cover" style="background-image: url(assets/img/model2.jpg); background-repeat: no-repeat; background-size: cover; height: 100vh; background-color: black;">
					<div class="text-center">
						<a href="form-daftar.php"><butt
							<?php 
							if(isset($_GET['status'])): ?>
								<p>
									<?php
									if($_GET['status'] == 'sukses'){
										echo 
										'<div class="alert alert-success" role="alert">Tambah produk berhasil!</div>';
									} else {
										echo 
										'<div class="alert alert-danger" role="alert">Tambah produk gagal!</div>';
									}
									?>

								</p>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
	include"footer.php";
	?>

	<script type="text/javascript" src="assets/js/jquery-3.6.0.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>