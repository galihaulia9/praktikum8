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

<?php
    $error_namalengkap = "";
    $error_jkel = "";
    $error_NISN = "";
    $error_NIK = "";
    $error_tmptTL = "";
    $error_TglLahir = "";
    $error_agama = "";
    $error_BK = "";
    $error_alamat = "";
    $error_RT = "";
    $error_RW= "";
    $error_nmDusun = "";
    $error_nmKelurahan = "";
    $error_Kec = "";
    $error_kodepos = "";
    $error_tmptTinggal = "";
    $error_transport = "";
    $error_noHP = "";
    $error_noTlpn = "";
    $error_email = "";
    $error_terimabantuan = "";
    $error_noBantuan = "";
    $error_kewarganegaraan = "";
    $error_nmNegara = "";

    $namalengkap = "";
    $jkel = "";
    $NISN = "";
    $NIK = "";
    $tmptTL = "";
    $TglLahir = "";
    $agama = "";
    $BK = "";
    $alamat = "";
    $RT = "";
    $RW= "";
    $nmDusun = "";
    $nmKelurahan = "";
    $Kec = "";
    $kodepos = "";
    $tmptTinggal = "";
    $transport = "";
    $noHP = "";
    $noTlpn = "";
    $email = "";
    $terimabantuan = "";
    $noBantuan = "";
    $kewarganegaraan = "";
    $nmNegara = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["NISN"])) {
            $error_NISN = "Kolom NISN tidak boleh kosong";
        } else {
            $NISN = cek_input($_POST["NISN"]);
            if (!is_numeric($NISN)) {
                $error_NISN = "Kolom NISN hanya dapat diisi angka";
            }
        }

        if (empty($_POST["NIK"])) {
            $error_NIK = "Kolom NIK tidak boleh kosong";
        } else {
            $NIK = cek_input($_POST["NIK"]);
            if (!is_numeric($NIK)) {
                $error_NIK = "NIK hanya dapat diisi angka";
            }
        }

        if (empty($_POST["noHP"])) {
            $error_noHP = "Kolom nomor HP tidak boleh kosong";
        } else {
            $noHP = cek_input($_POST["noHP"]);
            if (!is_numeric($noHP)) {
                $error_noHP = "Nomor HP hanya dapat diisi angka";
            }
        }

        if (empty($_POST["email"])) {
            $error_email = "Email tidak boleh kosong";
        } else {
            $email = cek_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $error_email = "Format Email Invalid";
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
                    2. FORM DATA DIRI
                </div>
                <div class="card-body">
                    <form method="post" action="prosesdatapribadi.php">

                    <div class="form-group row">
                        <label for="namalengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-10">
                            <input type="text" name="namalengkap" id="namalengkap" class="form-control <?php echo ($error_namalengkap !="" ? "is-invalid" : ""); ?>" placeholder="" value="<?php echo $namalengkap; ?>"> <span class="warning"><?php echo $error_namalengkap ?></span>
                        </div>
                    </div>
                    
                    <br>
                    <div class="form-group row">
                        <label for="jkel" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-10">
                            <input type="radio" name="jkel" value="Laki Laki">Laki-Laki</label>
                            <input type="radio" name="jkel" value="Perempuan">Perempuan</label> 
                            <span class="warning" ><?php echo $error_jkel; ?></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="NISN" class="col-sm-2 col-form-label">NISN</label>
                        <div class="col-sm-10">
                            <input type="text" name="NISN" id="NISN" class="form-control <?php echo ($error_NISN !="" ? "is-invalid" : ""); ?>" placeholder="" value="<?php echo $NISN; ?>"> <span class="warning"><?php echo $error_NISN ?></span>
                        </div>
                    </div> <br>

                    <div class="form-group row">
                        <label for="NIK" class="col-sm-2 col-form-label">NIK</label>
                        <div class="col-sm-10">
                            <input type="text" name="NIK" id="NIK" class="form-control <?php echo ($error_NIK !="" ? "is-invalid" : ""); ?>" placeholder="11638xxxxxxxxx" value="<?php echo $NIK; ?>"> <span class="warning"><?php echo $error_NIK ?></span>
                        </div>
                    </div> <br>

                    <div class="form-group row">
                        <label for="tmptTL" class="col-sm-2 col-form-label">Tempat Lahir</label>
                        <div class="col-sm-10">
                            <input type="text" name="tmptTL" id="tmptTL" class="form-control <?php echo ($error_tmptTL !="" ? "is-invalid" : ""); ?>" placeholder="" value="<?php echo $tmptTL; ?>"> <span class="warning"><?php echo $error_tmptTL ?></span>
                        </div>
                    </div> <br>

                    <div class="form-group row">
                        <label for="TglLahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-10">
                            <input type="text" name="TglLahir" id="TglLahir" class="form-control <?php echo ($error_TglLahir !="" ? "is-invalid" : ""); ?>" placeholder="XX-Bulan-XXXX" value="<?php echo $TglLahir; ?>"> <span class="warning"><?php echo $error_TglLahir ?></span>
                        </div>
                    </div> <br>

                    <div class="form-group row">
                        <label for="agama" class="col-sm-2 col-form-label "> Agama </label>
                        <div class="col-sm-10">
                            <select class="col-sm-2 form-select" name="agama">
                            <option value=""></option>
                            <option value="Islam"> Islam </option>
                            <option value="Kristen/Protestan"> Kristen/Protestan </option>
                            <option value="Katholik"> Katholik </option>
                            <option value="Hindu"> Hindu </option>
                            <option value="Budha"> Budha </option>
                            <option value="Konghucu"> Konghucu </option>
                            <option value="Lainnya"> Lainnya </option>
                            </select>
                            <span class="warning" ><?php echo $error_agama; ?></span>
                        </div>
                    </div> <br>

                    <div class="form-group row">
                        <label for="BK" class="col-sm-2 col-form-label "> Berkebutuhan Khusus </label>
                        <div class="col-sm-10">
                            <select class="col-sm-2 form-select" name="BK">
                            <option value=""></option>
                            <option value="Tidak"> Tidak </option>
                            <option value="Netra (A)"> Netra (A) </option>
                            <option value="Rungu (B)"> Rungu (B) </option>
                            <option value="Grahita Ringan (C)"> Grahita Ringan (C) </option>
                            <option value="Grahita Sedang (C1)"> Grahita Sedang (C1) </option>
                            <option value="Daksa Ringan (D)"> Daksa Ringan (D) </option>
                            <option value="Laras (E)"> Laras (E) </option>
                            <option value="Wicara (F)"> Wicara (F) </option>
                            <option value="Tuna Ganda (G)"> Tuna Ganda (G) </option>
                            <option value="Hiper Aktif (H)"> Hiper Aktif (H) </option>
                            <option value="Cerdas Istimewa (I)"> Cerdas Istimewa (I) </option>
                            <option value="Bakat Istimewa (J)"> Bakat Istimewa (J) </option>
                            <option value="Kesulitan Belajar (K)"> Kesulitan Belajar (K) </option>
                            <option value="Narkoba (N)"> Narkoba (N) </option>
                            <option value="Indigo (O)"> Indigo (O) </option>
                            <option value="Down Syndrom (P)"> Down Syndrom (P) </option>
                            <option value="Autis (Q)"> Autis (Q) </option>
                            <option value="Lainnya"> Lainnya </option>
                            </select>
                            <span class="warning" ><?php echo $error_BK; ?></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <input type="text" name="alamat" id="alamat" class="form-control <?php echo ($error_alamat !="" ? "is-invalid" : ""); ?>" placeholder="" value="<?php echo $alamat; ?>"> <span class="warning"><?php echo $error_alamat ?></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="RT" class="col-sm-2 col-form-label">RT</label>
                        <div class="col-sm-10">
                            <input type="text" name="RT" id="RT" class="form-control <?php echo ($error_RT !="" ? "is-invalid" : ""); ?>" placeholder="XX" value="<?php echo $RT; ?>"> <span class="warning"><?php echo $error_RT ?></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="RW" class="col-sm-2 col-form-label">RW</label>
                        <div class="col-sm-10">
                            <input type="text" name="RW" id="RW" class="form-control <?php echo ($error_RW !="" ? "is-invalid" : ""); ?>" placeholder="XX" value="<?php echo $RW; ?>"> <span class="warning"><?php echo $error_RW ?></span>
                        </div>
                    </div>

                    <br>
                    <div class="form-group row">
                        <label for="nmDusun" class="col-sm-2 col-form-label">Nama Dusun</label>
                        <div class="col-sm-10">
                            <input type="text" name="nmDusun" id="nmDusun" class="form-control <?php echo ($error_nmDusun !="" ? "is-invalid" : ""); ?>" placeholder="" value="<?php echo $nmDusun; ?>"> <span class="warning"><?php echo $error_nmDusun ?></span>
                        </div>
                    </div> <br>

                    
                    <div class="form-group row">
                        <label for="nmKelurahan" class="col-sm-2 col-form-label">Nama Kelurahan/Desa</label>
                        <div class="col-sm-10">
                            <input type="text" name="nmKelurahan" id="nmKelurahan" class="form-control <?php echo ($error_nmKelurahan !="" ? "is-invalid" : ""); ?>" placeholder="" value="<?php echo $nmKelurahan; ?>"> <span class="warning"><?php echo $error_nmKelurahan ?></span>
                        </div>
                    </div> <br>

                    
                    <div class="form-group row">
                        <label for="Kec" class="col-sm-2 col-form-label">Kecamatan</label>
                        <div class="col-sm-10">
                            <input type="text" name="Kec" id="Kec" class="form-control <?php echo ($error_Kec !="" ? "is-invalid" : ""); ?>" placeholder="" value="<?php echo $Kec; ?>"> <span class="warning"><?php echo $error_Kec ?></span>
                        </div>
                    </div> <br>

                    
                    <div class="form-group row">
                        <label for="kodepos" class="col-sm-2 col-form-label">Kode Pos</label>
                        <div class="col-sm-10">
                            <input type="text" name="kodepos" id="kodepos" class="form-control <?php echo ($error_kodepos !="" ? "is-invalid" : ""); ?>" placeholder="xxxxxx" value="<?php echo $kodepos; ?>"> <span class="warning"><?php echo $error_kodepos ?></span>
                        </div>
                    </div> <br>

                    <div class="form-group row">
                        <label for="tmptTinggal" class="col-sm-2 col-form-label "> Tempat Tinggal </label>
                        <div class="col-sm-10">
                            <select class="col-sm-2 form-select" name="tmptTinggal">
                            <option value=""></option>
                            <option value="Bersama Orang Tua"> Bersama Orang Tua </option>
                            <option value="Wali"> Wali </option>
                            <option value="Kos"> Kos </option>
                            <option value="Asrama"> Asrama </option>
                            <option value="Panti Asuhan"> Panti Asuhan </option>
                            <option value="Lainnya"> Lainnya </option>
                            </select>
                            <span class="warning" ><?php echo $error_tmptTinggal; ?></span>
                        </div>
                    </div> <br>

                    <div class="form-group row">
                        <label for="transport" class="col-sm-2 col-form-label "> Moda Transportasi </label>
                        <div class="col-sm-10">
                            <select class="col-sm-2 form-select" name="transport">
                            <option value=""></option>
                            <option value="Jalan Kaki"> Jalan Kaki </option>
                            <option value="Kendaraan Pribadi"> Kendaraan Pribadi </option>
                            <option value="Kendaraan Umum/Angkot/Pete-Pete"> Kendaraan Umum/Angkot/Pete-Pete </option>
                            <option value="Jemputan Sekolah"> Jemputan Sekolah </option>
                            <option value="Kereta Api"> Kereta Api </option>
                            <option value="Ojek"> Ojek </option>
                            <option value="Andong/Bedi/Sado/Dokar/Delman/Becak"> Andong/Bedi/Sado/Dokar/Delman/Becak </option>
                            <option value="Perahu Penyebrangan/Rakit/Getek"> Perahu Penyebrangan/Rakit/Getek </option>
                            <option value="Lainnya"> Lainnya </option>
                            </select>
                            <span class="warning" ><?php echo $error_transport; ?></span>
                        </div>
                    </div> <br>
                    
                    <div class="form-group row">
                        <label for="noHP" class="col-sm-2 col-form-label">Nomor HP</label>
                        <div class="col-sm-10">
                            <input type="text" name="noHP" id="noHP" class="form-control <?php echo ($error_noHP !="" ? "is-invalid" : ""); ?>" placeholder="XX" value="<?php echo $noHP; ?>"> <span class="warning"><?php echo $error_noHP ?></span>
                        </div>
                    </div> <br>

                    <div class="form-group row">
                        <label for="noTlpn" class="col-sm-2 col-form-label">Nomor Telp</label>
                        <div class="col-sm-10">
                            <input type="text" name="noTlpn" id="noTlpn" class="form-control <?php echo ($error_noTlpn !="" ? "is-invalid" : ""); ?>" placeholder="XX" value="<?php echo $noTlpn; ?>"> <span class="warning"><?php echo $error_noTlpn ?></span>
                        </div>
                    </div> <br>

                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email Pribadi</label>
                        <div class="col-sm-10">
                            <input type="text" name="email" id="email" class="form-control <?php echo ($error_email !="" ? "is-invalid" : ""); ?>" placeholder="XX" value="<?php echo $email; ?>"> <span class="warning"><?php echo $error_email ?></span>
                        </div>
                    </div> <br>

                    <div class="form-group row">
                        <label for="terimabantuan" class="col-sm-2 col-form-label">Penerima KPS/PKH/KIP</label>
                        <div class="col-sm-10">
                            <input type="radio" name="terimabantuan" value="Ya">Ya</label>
                            <input type="radio" name="terimabantuan" value="Tidak">Tidak</label> 
                            <span class="warning" ><?php echo $error_terimabantuan; ?></span>
                        </div>
                    </div> <br>

                    <div class="form-group row">
                        <label for="noBantuan" class="col-sm-2 col-form-label">Nomor KPS/PKH/KIP</label>
                        <div class="col-sm-10">
                            <input type="text" name="noBantuan" id="noBantuan" class="form-control <?php echo ($error_noBantuan !="" ? "is-invalid" : ""); ?>" placeholder="XX" value="<?php echo $noBantuan; ?>"> <span class="warning"><?php echo $error_noBantuan ?></span>
                        </div>
                    </div> <br>

                    <div class="form-group row">
                        <label for="kewarganegaraan" class="col-sm-2 col-form-label">Kewarganegaraan</label>
                        <div class="col-sm-10">
                            <input type="radio" name="kewarganegaraan" value="Indonesia (WNI)">Indonesia (WNI)</label>
                            <input type="radio" name="kewarganegaraan" value="Asing (WNA)">Asing (WNA)</label> 
                            <span class="warning"><?php echo $error_kewarganegaraan; ?></span>
                        </div>
                    </div> <br>

                    <div class="form-group row">
                        <label for="nmNegara" class="col-sm-2 col-form-label">Nama Negara</label>
                        <div class="col-sm-10">
                            <input type="text" name="nmNegara" id="nmNegara" class="form-control <?php echo ($error_nmNegara !="" ? "is-invalid" : ""); ?>" placeholder="" value="<?php echo $nmNegara; ?>"> <span class="warning"><?php echo $error_nmNegara ?></span>
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