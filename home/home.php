<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="home.css">
    <title>Home</title>
</head>
<body>
<div class="navigation">
        <ul>
            <li class="list active">
                <a href="../home/home.php">
                    <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                    <span class="title">Home</span>
                </a>
            </li>
            <li class="list">
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
    <div id="home" class="d-flex justify-content-center align-items-center">
    <div class="home-container">
        <h1>SELAMAT DATANG DI SMK JAKARTA PUSAT 1</h1>
        <p id="typing"></p>
    </div>
</div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/typeit@8.7.0/dist/index.umd.js"></script>
    <script src="home.js"></script>
</body>
</html>