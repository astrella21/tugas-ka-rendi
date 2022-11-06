<?php

require 'functions.php';

$gtk = query("SELECT * FROM gtk");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Gtk.css">
    <title>Data GTK SMK Jakarta Pusat 1</title>
</head>
<body>
    <div class="navigation">
        <ul>
            <li class="list">
                <a href="../home/home.php">
                    <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                    <span class="title">Home</span>
                </a>
            </li>
            <li class="list active">
                <a href="../gtk/Gtk.php">
                    <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                    <span class="title">GTK</span>
                </a>
            </li>
            <li class="list">
                <a href="../resepsionis/Rsp.php">
                    <span class="icon"><ion-icon name="laptop-outline"></ion-icon></span>
                    <span class="title">Resepsionis</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="container">
        <h1>Data GTK SMK JAKARTA PUSAT 1</h1>
        <a href="tambahGtk.php">Tambah Data</a>
    <table>
        <tr>
            <th>No.</th>
            <th>Nama Lengkap</th>
            <th>Roles</th>
            <th>Foto</th>
            <th>Opsi</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach($gtk as $data) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $data["nama_lengkap"]; ?></td>
                <td><?= $data["roles"]; ?></td>
                <td><img src="../foto/<?= $data["foto"]; ?>" width="150px" height="100px"></td>
                <td>
                <a href="editGtk.php?id=<?= $data["id_gtk"];  ?>" class="edit">Edit</a>
                <a href="hapusGtk.php?id=<?= $data["id_gtk"]; ?>" class="hapus" onClick="return confirm('Anda yakin ingin menghapus?');">Hapus</a>
                </td>
            </tr>
            <?php $i++; ?>
            <?php endforeach ; ?>
    </table>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>