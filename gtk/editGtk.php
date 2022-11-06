<?php 

require 'functions.php';

$id = $_GET["id"];
$gtk = query("SELECT * FROM gtk WHERE id_gtk = '$id'")[0];

if(isset($_POST["kirim"])){
    if(editGtk($_POST) > 0){
    echo "
        <script type='text/javascript'>
            alert('Data Gtk berhasil diubah');
            window.location = 'Gtk.php';
        </script>
    ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('Data Gtk gagal ditambahkan');
            window.location = 'Gtk.php';
        </script>
    ";
    }
 }   
?>
<div class="main">
        <div class="box">
            
        <h3>Edit Data Gtk</h3>
            <form action="" method="POST">
            <input type="hidden" name="id_gtk" value="<?= $gtk["id_gtk"]; ?>"><br><br>

            <label for="nama_lengkap">Nama Lengkap</label> 
            <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" value="<?= $gtk["nama_lengkap"]; ?>"><br><br> 

            <label for="foto">foto</label> 
            <input type="file" name="foto" id="foto" class="form-control" value="<?= $gtk["foto"]; ?>"><br><br>

            <label for="roles">Roles</label> 
            <select name="roles" class="form-control">
                <option value="Kepala Sekolah">Kepala Sekolah</option>
                <option value="Wakil Kepala Sekolah">Wakil Kepala Sekolah</option>
                <option value="Guru">Guru</option>
            </select><br><br>

            <button type="submit" name="kirim">edit</button>
        </form>
        </div>
    </div>