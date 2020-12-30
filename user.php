<?php
include 'auth.php';
session_start();

    // cek apakah yang mengakses ini sudah login
    if ($_SESSION['level'] !== "user")
    {
        header("location: index.php?pesan=gagal");
    }

?>
<!DOCTYPE html>
<html>
<head>
    <title>Aplikasi Data Mahasiswa</title>
    <!-- Csrf Token -->
    <meta name="csrf-token" content="<?= $_SESSION['csrf_token'] ?>">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">    
    <link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap4.min.css">
</head>
<body>
    <nav class="navbar navbar-dark bg-primary sticky-top">
        <a class="navbar-brand" href="" style="color: #fff;">
        SEKOLAH TINGGI ILMU TARBIYAH
        </a>
        <a >Halo <b><?php echo $_SESSION['username']; ?></b>, Anda telah masuk sebagai <b><?php echo $_SESSION['level'];?></b></a>
        <a href="logout.php" class="btn btn-lg btn-warning"><b>KELUAR</b></a>
    </nav>

    <div class="container-fluid">
        <h2 align="center" style="margin: 30px;">Aplikasi Data Mahasiswa</h2>

        <form method="post" class="form-data" id="form-data">
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Nama Mahasiswa</label>
                        <input type="text" name="nama_mahasiswa" id="nama_mahasiswa" class="form-control" required="true">
                        <p class="text-danger" id="err_nama_mahasiswa"></p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Jurusan</label>
                        <select name="jurusan" id="jurusan" class="form-control" required="true">
                            <option value=""></option>
                            <option value="PAI">PAI(Pendidikan Agama Islam)</option>
                            <option value="PBA">PBA(Pendidikan Bahasa Arab)</option>
                        </select>
                        <p class="text-danger" id="err_jurusan"></p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Tanggal Masuk</label>
                        <input type="date" name="tanggal_masuk" id="tanggal_masuk" class="form-control" required="true">
                        <p class="text-danger" id="err_tanggal_masuk"></p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Jenis Kelamin</label><br>
                        <input type="radio" name="jenkel" id="jenkel1" value="Laki-laki" required="true"> Laki-laki
                        <input type="radio" name="jenkel" id="jenkel2" value="Perempuan"> Perempuan
                    </div>
                    <p class="text-danger" id="err_jenkel"></p>
                </div>
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <textarea name="alamat" id="alamat" class="form-control" required="true"></textarea>
                <p class="text-danger" id="err_alamat"></p>
            </div>
            <div class="form-group">
                <button type="button" name="simpan" id="simpan" class="btn btn-primary">
                    <i class="fa fa-save"></i> Simpan
                </button>
            </div>
            <input type="hidden" name="id" id="id">
        </form>
        <hr>

        <div class="data"></div>
    </div>

    <hr class="my-4">

    <div class="text-center">&copy
        <?php echo date('Y'); ?> Chat Me : 
        <a href="https://api.whatsapp.com/send? phone=6285237585803"> Kaligrafi Lombok</a>
    </div>


<script src="js/jquery.min.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main2.js" type="text/javascript"></script>

</body>
</html>
