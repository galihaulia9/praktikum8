<?php
include 'koneksi.php';
//menyimpan data kedalam variabel
$id  		   = $_POST['id'];
$Nama 	 	   = $_POST['Nama']; 
$jkel    	   = $_POST['jkel']; 
$Email 		   = $_POST['Email']; 
$Alamat  	   = $_POST['Alamat']; 
$Kota  	   	   = $_POST['Kota']; 
$Pesan  	   = $_POST['Pesan']; 
//query SQL untuk insert data
$query="INSERT INTO datakontak SET id='$id',Nama='$Nama',jkel='$jkel',Email='$Email',Alamat='$Alamat',Kota='$Kota',Pesan='$Pesan'";
mysqli_query($koneksi, $query);
//mengalihkan kehalaman tampilkontak.php
header("location:tampilkontak.php");
?>