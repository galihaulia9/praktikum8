<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
</head>
<body>
	<h2 align="center">LOGIN</h2>
	<br/>
	<!-- cek pesan notifikasi -->
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Username dan password salah. Silahkan Anda Coba lagi!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda berhasil logout!!!";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Silahkan login dahulu untuk mengakses halaman!";
		}
	}
	?>
	
	<form method="post" action="cekformlogin.php">
		<table align="center">
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" value="LOGIN"></td>
			</tr>
		</table>			
	</form>
</body>
</html>