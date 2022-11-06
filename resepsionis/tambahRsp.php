<?php 

require 'functions.php';

if(isset($_POST["kirim"])){
    if(tambahRsp($_POST) > 0){
    echo "
        <script type='text/javascript'>
            alert('Data Resepsionis berhasil ditambahkan');
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
            <label for="username">Username</label> 
            <input type="text" name="username" id="username" class="form-control"><br><br>

            <label for="nama_lengkap">Nama Lengkap</label> 
            <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control"><br><br>

            <label for="kelas">Kelas</label> 
            <input type="text" name="kelas" id="kelas" class="form-control"><br><br>

            <label for="password">Password</label> 
            <input type="text" name="password" id="password" class="form-control"><br><br>

            <label for="roles">Roles</label> 
            <select name="roles" class="form-control">
                <option value="Admin">Admin</option>
                <option value="Resepsionis">Resepsionis</option>
            </select><br><br>

            <button type="submit" name="kirim">Tambah</button>

        </form>
        </div>
    </div>