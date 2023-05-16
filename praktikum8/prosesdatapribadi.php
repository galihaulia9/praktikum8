<?php 
// Konfigurasi database
$host = "localhost";
$username = "root";
$password = "";
$database = "praktikum8";

// Membuat koneksi ke database
$conn = new mysqli($host, $username, $password, $database);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
// Menangkap data yang dikirim melalui form
    $namalengkap = $_POST['namalengkap'];
    $jkel = $_POST['jkel'];
    $NISN = $_POST['NISN'];
    $NIK = $_POST['NIK'];
    $tmptTL = $_POST['tmptTL'];
    $TglLahir = $_POST['TglLahir'];
    $agama = $_POST['agama'];
    $BK = $_POST['BK'];
    $alamat = $_POST['alamat'];
    $RT = $_POST['RT'];
    $RW = $_POST['RW'];
    $nmDusun = $_POST['nmDusun'];
    $nmKelurahan = $_POST['nmKelurahan'];
    $Kec = $_POST['Kec'];
    $kodepos = $_POST['kodepos'];
    $tmptTinggal = $_POST['tmptTinggal'];
    $transport = $_POST['transport'];
    $noHP = $_POST['noHP'];
    $noTlpn = $_POST['noTlpn'];
    $email = $_POST['email'];
    $terimabantuan = $_POST['terimabantuan'];
    $noBantuan = $_POST['noBantuan'];
    $kewarganegaraan = $_POST['kewarganegaraan'];
    $nmNegara = $_POST['nmNegara'];

      // Menyimpan ke database
      $sql = mysqli_query($conn, "INSERT INTO datapribadi (namalengkap, jkel, NISN, NIK, tmptTL, TglLahir, agama, BK, alamat, RT, RW, nmDusun, nmKelurahan, Kec, kodepos, tmptTinggal, transport, noHP, noTlpn, email, terimabantuan, noBantuan, kewarganegaraan, nmNegara) VALUES ('$namalengkap', '$jkel', '$NISN', '$NIK, '$tmptTL', '$TglLahir', '$agama', '$BK', '$alamat', '$RT', '$RW', '$nmDusun', '$nmKelurahan', '$Kec, '$kodepos', '$tmptTinggal', '$transport', '$noHP', '$noTlpn', '$email', '$terimabantuan', '$noBantuan', '$kewarganegaraan', '$nmNegara')");
      if ($conn->query($query) === TRUE) {
        echo "Data pribadi berhasil disimpan.";
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
    
    // Menutup koneksi database
    $conn->close();
    header("Location:formdataayah.php");
    ?>