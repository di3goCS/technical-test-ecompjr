<?php session_start(); ?>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../assets/css/home.css">
        <link rel="shortcut icon" type="image/png" href="../assets/img/favicon.png"/>
        <title>Parcerias</title>
    </head>
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12" id="mother">
                    <nav class="nav">
                        <a class="nav-link" href="/projetofinal/home/home">Início</a>
                        <a class="nav-link" href="/projetofinal/home/partnership">Parcerias</a>
                            <?php if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){ ?>
                            <a class="nav-link" href="/projetofinal/views/admin/dashboard.php">Dashboard</a>
                            <ul class="nav ml-auto">
                                <li class="nav-item"> 
                                    <p id="session-token"> <?php echo "Olá, ".$_SESSION['name']."!" ?> </p>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="/projetofinal/user/logout">Sair</a>
                                </li>
                            <?php } else { ?>
                            <ul class="nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link active" href="/projetofinal/home/login">Login</a>
                                </li>
                            <?php } ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <body>
        <!-- Fazer carousel pras parcerias --->
    </body>
</html>