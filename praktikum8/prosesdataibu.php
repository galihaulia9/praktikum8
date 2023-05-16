<?php 
include 'koneksi8.php';
    if (isset($_POST['submit'])) {
        $nmIbu = $_POST['nmIbu'];
        $thnLahir = $_POST['thnLahir'];
        $pendidikan = $_POST['pendidikan'];
        $pekerjaan = $_POST['pekerjaan'];
        $gajibulanan = $_POST['gajibulanan'];
        $BK = $_POST['BK'];
$conn = mysqli_connect($host, $user, $password, $database);
      // Menyimpan ke database
      $sql = mysqli_query($conn, "INSERT INTO dataIbu (nmIbu, thnLahir, pendidikan, pekerjaan, gajibulanan, BK)
                                  VALUES ('$nmIbu', '$thnLahir', '$pendidikan', '$pekerjaan', '$gajibulanan', '$BK')");
      if ($sql) {
          // pesan jika data tersimpan
          echo "<script>alert('Seluruh data peserta didik berhasil disimpan!'); window.location.href='formpendaftaran.php'</script>"; 
        } else {
          // pesan jika data gagal disimpan
            echo "alert('Data gagal ditambahkan!');";
        }
      }
?>