<?php

require 'functions.php';

$Rsp = query("SELECT * FROM resepsionis");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Rsp.css">
    <title>Data SMK Jakarta Pusat 1</title>
</head>
<body>
<div class="navigation">
        <ul>
            <li class="list">
                <a href="../home.php">
                    <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                    <span class="title">Home</span>
                </a>
            </li>
            <li class="list">
                <a href="../gtk/Gtk.php">
                    <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                    <span class="title">Gtk</span>
                </a>
            </li>
            <li class="list active">
                <a href="../resepsionis/Rsp.php">
                    <span class="icon"><ion-icon name="laptop-outline"></ion-icon></span>
                    <span class="title">Resepsionis</span>
                </a>
            </li>
        </ul>
</div>
<div class="container">
    <h1>Data SMK JAKARTA PUSAT 1</h1>
    <a href="tambahRsp.php">Tambah Data</a>
    <table>
        <tr>
            <th>No.</th>
            <th>Username</th>
            <th>Nama Lengkap</th>
            <th>Kelas</th>
            <th>Roles</th>
            <th>Opsi</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach($Rsp as $data) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $data["username"]; ?></td>
                <td><?= $data["nama_lengkap"]; ?></td>
                <td><?= $data["kelas"]; ?></td>
                <td><?= $data["roles"]; ?></td>
                <td>
                <a href="editRsp.php?id=<?= $data["id_resepsionis"];  ?>" class="edit">Edit</a>
                <a href="hapusRsp.php?id=<?= $data["id_resepsionis"]; ?>" class="hapus" onClick="return confirm('Anda yakin ingin menghapus?');">Hapus</a>
                </td>
            </tr>
            <?php $i++; ?>
            <?php endforeach ; ?>
    </table>
    </div>
      <!-- JavaScript Bundle with Popper -->
      <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>