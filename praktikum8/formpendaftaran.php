<?php
    include 'koneksi8.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULIR PESERTA DIDIK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        .warning {color: #FF0000;}
    </style>
</head>
<body>
    <center>
        <h1> FORMULIR PESERTA DIDIK </h1>
        <form action="#" method="post">
            <label for="tanggal">Tanggal :</label>
            <input type="date" id="tanggal" name="tanggal" value="<?php echo date('Y-m-d'); ?>">
            <br><br>
        </form>
    </center>
<?php
    $error_nodaftar = "";
    $error_jnspend = "";
    $error_tglmsksklh = "";
    $error_nissklh = "";
    $error_nopstujian = "";
    $error_paud = "";
    $error_TK = "";
    $error_noskhun = "";
    $error_noijazah = "";
    $error_hobi = "";
    $error_citacita = "";

    $nodaftar = "";
    $jnspend = "";
    $tglmsksklh = "";
    $nissklh = "";
    $nopstujian = "";
    $paud = "";
    $TK = "";
    $noskhun = "";
    $noijazah = "";
    $hobi = "";
    $citacita = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["nissklh"])) {
            $error_nissklh = "Kolom NIS tidak boleh kosong";
        } else {
            $nissklh = cek_input($_POST["nissklh"]);
            if (!is_numeric($nissklh)) {
                $error_nissklh = "Kolom NIS hanya dapat diisi angka";
            }
        }

        if (empty($_POST["nopstujian"])) {
            $error_nopstujian = "Kolom no. peserta ujian tidak boleh kosong";
        } else {
            $nopstujian = cek_input($_POST["nopstujian"]);
            if (!is_numeric($nopstujian)) {
                $error_nopstujian = "Kolom no. peserta ujian hanya dapat diisi angka";
            }
        }

        if (empty($_POST["noskhun"])) {
            $error_noskhun = "Kolom nomor seri SKHUN tidak boleh kosong";
        } else {
            $noskhun = cek_input($_POST["noskhun"]);
            if (!is_numeric($noskhun)) {
                $error_noskhun = "Nomor seri SKHUN hanya dapat diisi angka";
            }
        }

        if (empty($_POST["noijazah"])) {
            $error_noijazah = "Kolom no. seri ijazah tidak boleh kosong";
        } else {
            $noijazah = cek_input($_POST["noijazah"]);
            if (!is_numeric($noijazah)) {
                $error_noijazah = "Kolom nomor Seri Ijazah hanya dapat diisi angka";
            }
        }

    }

    function cek_input($data) {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
   
<div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                FORMULIR PESERTA DIDIK
                </div>
                <div class="card-footer">
                    1. FORM REGISTRASI
                </div>
                <div class="card-body">
                    <form method="post" action="prosespendaftaran.php">

                    <div class="form-group row">
                        <label for="namanopendaftaran" class="col-sm-2 col-form-label">No. Pendaftaran</label>
                        <div class="col-sm-10">
                            <input type="text" name="nodaftar" id="nodaftar" class="form-control <?php echo ($error_nodaftar !="" ? "is-invalid" : ""); ?>" placeholder="" value="<?php echo $nodaftar; ?>"> <span class="warning"><?php echo $error_nodaftar ?></span>
                        </div>
                    </div>
                    
                    <br>
                    <div class="form-group row">
                        <label for="jnspend" class="col-sm-2 col-form-label">Jenis Pendaftaran</label>
                        <div class="col-sm-10">
                            <input type="radio" name="jnspend" value="Siswa Baru">Siswa Baru</label><br>
                            <input type="radio" name="jnspend" value="Pindahan">Pindahan</label>
                            <span class="warning" ><?php echo $error_jnspend; ?></span>
                        </div>
                    </div><br>

                    <div class="form-group row">
                        <label for="web" class="col-sm-2 col-form-label">Tanggal Masuk Sekolah</label>
                        <div class="col-sm-10">
                            <input type="text" name="tglmsksklh" id="tglmsksklh" class="form-control <?php echo ($error_tglmsksklh !="" ? "is-invalid" : ""); ?>" placeholder="XX - Bulan - XXXX" value="<?php echo $tglmsksklh; ?>"> <span class="warning"><?php echo $error_tglmsksklh ?></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nissklh" class="col-sm-2 col-form-label">NIS</label>
                        <div class="col-sm-10">
                            <input type="text" name="nissklh" id="nissklh" class="form-control <?php echo ($error_nissklh !="" ? "is-invalid" : ""); ?>" placeholder="Nomor Induk Siswa" value="<?php echo $nissklh; ?>"> <span class="warning"><?php echo $error_nissklh ?></span>
                        </div>
                    </div> <br>

                    <div class="form-group row">
                        <label for="nopstujian" class="col-sm-2 col-form-label">Nomor Peserta Ujian</label>
                        <div class="col-sm-10">
                            <input type="text" name="nopstujian" id="nopstujian" class="form-control <?php echo ($error_nopstujian !="" ? "is-invalid" : ""); ?>" placeholder="No Peserta Ujian" value="<?php echo $nopstujian; ?>"> <span class="warning"><?php echo $error_nopstujian ?></span>
                        </div>
                    </div>
                    
                    <br>
                    <div class="form-group row">
                        <label for="paud" class="col-sm-2 col-form-label">Apakah Pernah Paud</label>
                        <div class="col-sm-10">
                            <input type="radio" name="paud" value="Ya">Ya</label><br>
                            <input type="radio" name="paud" value="Tidak">Tidak</label> 
                            <span class="warning" ><?php echo $error_paud; ?></span>
                        </div>
                    </div><br>

                    <div class="form-group row">
                        <label for="TK" class="col-sm-2 col-form-label">Apakah Pernah TK</label>
                        <div class="col-sm-10">
                            <input type="radio" name="TK" value="Ya">Ya</label><br>
                            <input type="radio" name="TK" value="Tidak">Tidak</label> 
                            <span class="warning" ><?php echo $error_TK; ?></span>
                        </div>
                    </div><br>

                    <div class="form-group row">
                        <label for="noskhun" class="col-sm-2 col-form-label">No. Seri SKHUN Sebelumnya</label>
                        <div class="col-sm-10">
                            <input type="text" name="noskhun" id="noskhun" class="form-control <?php echo ($error_noskhun !="" ? "is-invalid" : ""); ?>" placeholder="SKHUN Sebelumnya" value="<?php echo $noskhun; ?>"> <span class="warning"><?php echo $error_noskhun ?></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="noijazah" class="col-sm-2 col-form-label">No. Seri Ijazah Sebelumnya</label>
                        <div class="col-sm-10">
                            <input type="text" name="noijazah" id="noijazah" class="form-control <?php echo ($error_noijazah !="" ? "is-invalid" : ""); ?>" placeholder="Seri Ijazah Sebelumnya" value="<?php echo $noijazah; ?>"> <span class="warning"><?php echo $error_noijazah ?></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="hobi" class="col-sm-2 col-form-label "> Hobi </label>
                        <div class="col-sm-10">
                            <select class="col-sm-2 form-select" name="hobi">
                            <option value=""></option>
                            <option value="Olahraga"> Olahraga </option>
                            <option value="Kesenian"> Kesenian</option>
                            <option value="Membaca"> Membaca</option>
                            <option value="Menulis"> Menulis </option>
                            <option value="Traveling"> Traveling </option>
                            <option value="Lainnya"> Lainnya </option>
                            </select>
                            <span class="warning" ><?php echo $error_hobi; ?></span>
                        </div>
                    </div>

                    <br>
                    <div class="form-group row">
                        <label for="citacita" class="col-sm-2 col-form-label "> Cita Cita </label>
                        <div class="col-sm-10">
                            <select class="col-sm-2 form-select" name="citacita">
                            <option value=""></option>
                            <option value="PNS"> PNS </option>
                            <option value="TNI/POLRI"> TNI/POLRI</option>
                            <option value="Guru/Dosen"> Guru/Dosen</option>
                            <option value="Dokter"> Dokter </option>
                            <option value="Politikus"> Politikus </option>
                            <option value="Wiraswasta"> Wiraswasta </option>
                            <option value="Seni/Lukis/Artis/Sejenis"> Seni/Lukis/Artis/Sejenis </option>
                            <option value="Lainnya"> Lainnya </option>
                            </select>
                            <span class="warning" ><?php echo $error_citacita; ?></span>
                        </div>
                    </div>

                    <br>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" name="submit" class="btn btn-primary">Next</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>