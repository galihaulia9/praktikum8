<?php 
include 'koneksi8.php';
    if (isset($_POST['submit'])) {
        $nodaftar = $_POST['nodaftar'];
        $jnspend = $_POST['jnspend'];
        $tglmsksklh = $_POST['tglmsksklh'];
        $nissklh = $_POST['nissklh'];
        $nopstujian= $_POST['nopstujian'];
        $paud = $_POST['paud'];
        $TK = $_POST['TK'];
        $noskhun = $_POST['noskhun'];
        $noijazah = $_POST['noijazah'];
        $hobi = $_POST['hobi'];
        $citacita = $_POST['citacita'];

$conn = mysqli_connect($host, $user, $password, $database);

      // Menyimpan ke database
      $sql = mysqli_query($conn, "INSERT INTO formregis (nodaftar, jnspend, tglmsksklh, nissklh, nopstujian,
                                  paud, TK, noskhun, noijazah, hobi, citacita) VALUES ('$nodaftar', '$jnspend', '$tglmsksklh', '$nissklh','nopstujian', '$paud', '$TK', '$noskhun', '$noijazah', '$hobi', '$citacita')");
      if ($sql) {
          // pesan jika data tersimpan
          echo "<script>alert('Selanjutnya dimohon untuk melengkapi formulir data diri!'); window.location.href='formdatapribadi.php'</script>"; 
        } else {
          // pesan jika data gagal disimpan
            echo "alert('Data gagal ditambahkan!');";
        }
      }
?>
