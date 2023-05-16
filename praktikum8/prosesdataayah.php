<?php 
include 'koneksi8.php';
    if (isset($_POST['submit'])) {
        $nmAyah = $_POST['nmAyah'];
        $thnLahir = $_POST['thnLahir'];
        $pendidikan = $_POST['pendidikan'];
        $pekerjaan = $_POST['pekerjaan'];
        $gajibulanan = $_POST['gajibulanan'];
        $BK = $_POST['BK'];

$conn = mysqli_connect($host, $user, $password, $database);

      // Menyimpan ke database
      $sql = mysqli_query($conn, "INSERT INTO dataAyah (nmAyah, thnLahir, pendidikan, pekerjaan, gajibulanan, BK) VALUES ('$nmAyah', '$thnLahir', '$pendidikan', '$pekerjaan', '$gajibulanan', '$BK')");
      if ($sql) {
          // pesan jika data tersimpan
          echo "<script>alert('Selanjutnya dimohon untuk melengkapi formulir data ibu kandung!'); window.location.href='formdataibu.php'</script>"; 
        } else {
          // pesan jika data gagal disimpan
            echo "alert('Data gagal ditambahkan!');";
        }
      }
?>