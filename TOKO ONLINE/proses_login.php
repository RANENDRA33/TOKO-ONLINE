<?php
include("config.php");

if( isset($_POST['login']) ){
	
	$username = $_POST['username'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM tabel_user WHERE username = '$username' AND password = '$password'";

	$query = mysqli_query($db, $sql);

	$user = mysqli_fetch_assoc($query);
	
	if(mysqli_num_rows($query) > 0){
        session_start();
        $_SESSION['nama'] = $user['nama'];
        $_SESSION['username'] = $username;
		header('Location: index.php?login=sukses');
	} else {
		header('Location: login.php?login=gagal');
	}
	
} else {
	die("akses dilarang...");
}

?>