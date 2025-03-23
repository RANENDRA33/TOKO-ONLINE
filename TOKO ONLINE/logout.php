<?php
session_start();
session_destroy();
$_SESSION['nama'] = null;
$_SESSION['username'] = null;
header('Location: login.php');
?>