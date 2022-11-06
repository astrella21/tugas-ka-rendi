<?php 
require 'functions.php';

if(isset($_POST["kirim"])){
    if(tambahGtk($_POST) > 0){
        echo "
        <script type='text/javascript'>
            alert('Data Gtk Berhasil Ditambahkan')
            window.location = 'gtk.php';
        </script>
        ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('Data Gtk Gagal Ditambahkan')
            window.location = 'gtk.php';
    </script>
        ";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data gtk</title>
</head>
<body>
<div class="main">
    <div class="box">
        <h3>Tambah Data gtk</h3>

        <form action="" method="POST" enctype="multipart/form-data">
            <label for="nama_lengkap">Nama lengkap</label>
            <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control"><br><br>

        <label for="job">Job</label>
            <input type="text" name="job" id="job" class="form-control"><br><br>
            
            <select name="roles" id="roles" class="form-control">
                <option value="Kepala Sekolah">Kepala Sekolah</option>
                <option value="Wakil Kepala Sekolah">Wakil Kepala Sekolah</option>
                <option value="Guru">Guru</option>
            </select><br><br>

            <label for="foto">Foto</label>
            <input type="file" name="foto" id="foto" class="form-control"><br><br>

                <button tytpe="submit" name="kirim">Tambah</button>
        </form>
    </div>
</div>
</body>
</html>