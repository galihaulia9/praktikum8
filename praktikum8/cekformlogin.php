<?php

$valid_username = "auliamdy";
$valid_password = "aul9876";

// Ambil data dari form login
$username = $_POST['username'];
$password = $_POST['password'];

// Periksa apakah username dan password valid
if ($username == $valid_username && $password == $valid_password) {
	// Jika valid, redirect ke halaman welcome
	header("Location: formpendaftaran.php");
	exit();
} else {
	// Jika tidak valid, akan diarahkan ke halaman login
	header("Location: login.php");
	exit();
}
?>