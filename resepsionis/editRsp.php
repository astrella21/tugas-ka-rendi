<?php 

require 'functions.php';

$id = $_GET["id"];
$Rsp = query("SELECT * FROM resepsionis WHERE id_resepsionis = '$id'")[0];

if(isset($_POST["kirim"])){
    if(editRsp($_POST) > 0){
    echo "
        <script type='text/javascript'>
            alert('Data Resepsionis berhasil diubah');
            window.location = 'Rsp.php';
        </script>
    ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('Data Resepsionis gagal ditambahkan');
            window.location = 'Rsp.php';
        </script>
    ";
    }
 }   
?>

    <div class="main">
        <div class="box">
            
        <h3>Tambah Data Resepsionis</h3>

        <form action="" method="POST">
            <input type="hidden" name="id_resepsionis" value="<?= $Rsp["id_resepsionis"]; ?>"><br><br>

            <label for="username">Username</label> 
            <input type="text" name="username" id="username" class="form-control" value="<?= $Rsp["username"]; ?>"><br><br>

            <label for="nama_lengkap">Nama Lengkap</label> 
            <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" value="<?= $Rsp["nama_lengkap"]; ?>"><br><br>

            <label for="kelas">Kelas</label> 
            <input type="text" name="kelas" id="kelas" class="form-control" value="<?= $Rsp["kelas"]; ?>"><br><br>

            <label for="password">Password</label> 
            <input type="password" name="password" id="password" class="form-control" value="<?= $Rsp["password"]; ?>"><br><br>

            <label for="roles">Roles</label> 
            <select name="roles" class="form-control" value="<?= $username["roles"]; ?>">
                <option value="Admin">Admin</option>
                <option value="Resepsionis">Resepsionis</option>
            </select><br><br>
            <button type="submit" name="kirim">edit</button>
        </form>
        </div>
    </div>