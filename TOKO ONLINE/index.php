<!DOCTYPE html>
<html>
<head>
	<title>MADANI COLLECTION</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body class="cover" style="background-image: url(assets/img/style4.jpg); background-repeat: no-repeat; background-size: cover; height: 100vh;">
	<?php
	include("navbar.php");
	?> 
	<div class="container mt-5">
		<div class="row">
			<div class="col-lg-8 m-auto">
				<?php 
				if(isset($_GET['login'])){ 
					if($_GET['login']=='sukses'){?>
						<div class="alert alert-success" role="alert">
							<p class="text-center">LOGIN BERHASIL..!</p>
							<p class="text-center" style="font-size: 15px;">SELAMAT DATANG DI MADANI COLLECTION</p>
						</div>
					<?php }
				}
				?>
				<div class="jumbotron" style="position: sticky; background-color: transparent; height: 100vh; background-position: center;">
					<div class="text-center">
						<h1 style="text-align: center; font-size: 50px;">Get Up to 50%</h1>
						<h3 style="text-align: center; font-family: Garamond;">New Collection Arrivals</h3>
						<br>
						<div class="button" style="text-align: center;">
							<a href="form-produk.php"><button class="btn btn-md" style="background-color: peachpuff; font-family: Verdana;">BUY NOW</button></a>
						</div>
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


	<?php
	include"footer.php";
	?>
	<script type="text/javascript" src="assets/js/jquery-3.6.0.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>