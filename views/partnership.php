<?php session_start(); ?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../assets/css/home.css">
        <title>Parcerias</title>
    </head>
    <header>
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <a class="nav-link" href="/projetofinal/home/home">Início</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link active" href="/projetofinal/home/partnership">Parcerias</a>
            </li>
            <?php if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){ ?>
                <li class="nav-item">
                    <a class="nav-link" href="/projetofinal/views/admin/dashboard.php">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/projetofinal/user/logout">Sair</a>
                </li>
            <?php } else { ?>
                <li class="nav-item">
                    <a class="nav-link" href="/projetofinal/home/login">Login</a>
                </li>
            <?php } ?>
        </ul>
    </header>
    <body>
        
    </body>
</html>