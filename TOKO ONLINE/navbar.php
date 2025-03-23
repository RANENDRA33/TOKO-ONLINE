<?php
session_start();
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<div class="container-fluid">
		<a class="navbar-brand" style="font-family: Constantia; font-size: 25px; color: white;">MADANI COLLECTION</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle 
		navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarColor01">
		<ul class="navbar-nav me-auto">
			<li class="nav-item">
				<a class="nav-link" href="index.php">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="list-produk.php">Product List</a>
			</li>
		</ul>
	</div>
	<ul class="navbar-nav m-auto">
            <?php if(isset($_SESSION['nama'])){?>
            <li class="nav-item">
                <a class="nav-link" href="#"><?=strtoupper($_SESSION['nama'])?></a>
                <?php }else{?>
                <a class="nav-link" href="login.php">LOGIN</a>
                <?php }?>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="register.php">REGISTER</a>
            </li>
            <?php if(isset($_SESSION['nama'])){?>
            <li class="nav-item">
                <a class="nav-link" href="logout.php" onclick="return confirm('Yakin Anda Ingin Logout?')">LOGOUT</a>
            </li>
            <?php }?>
        </ul>
</div>
</nav>
