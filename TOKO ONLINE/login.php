<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>LOGIN MADANI COLLECTION</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body body class="cover" style="background-image: url(assets/img/daun.jpg); background-repeat: no-repeat; background-size: cover; height: 100vh; background-color: black;">
	<?php
	include"navbar.php";
	?>
	<div class="container">
		<div class="container mt-5">
			<div class="row">
				<div class="col-md-4 m-auto">
					<div class="card">
						<div class="card-body">
							<h4 class="text-center mb-5">SILAHKAN LOGIN</h4>
							<?php 
							if(isset($_POST['register'])){ 
								if($_POST['register']=='sukses'){?>
									<div class="alert alert-success" role="alert">
										Selamat akun berhasil dibuat silahkan login
									</div>
								<?php }
							}
							?>
							<?php 
							if(isset($_GET['login'])){ 
								if($_GET['login']=='gagal'){?>
									<div class="alert alert-danger" role="alert">
										LOGIN GAGAL!
									</div>
								<?php }
							}
							?>
							<form action="proses_login.php" method="POST">
								<div class="form-group">
									<label for="username">Username</label>
									<input class="form-control" type="text" name="username" placeholder="Username" required>
								</div>
								<div class="form-group">
									<label for="password">Password</label>
									<input class="form-control" type="password" name="password" placeholder="Password" required>
								</div>
								<p>Belum punya akun? <a href="register.php">Daftar di sini</a></p>
								<input type="submit" class="btn btn-success btn-block" name="login" value="LOGIN">
								<button class="btn btn-danger btn-block"><a href="login.php" style="color: white;">CLOSE</a></button>
							</form>
						</div>
					</div>

				</div>

			</div>

		</div>
	</div>
</div>

<script type="text/javascript" src="assets/js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

</body>
</html>