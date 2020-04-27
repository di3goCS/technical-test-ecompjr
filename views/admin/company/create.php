<?php 
    require_once "../../../dataBase/Connection.php";
    require_once "../../../models/User.php";
    require_once "../../../controllers/UserController.php";
    UserController::verifyLogin();
?>


<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../../../assets/css/dashboard.css">
        <title>Cadastro Empresarial</title>
    </head>
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12" id="mother">
                    <nav class="nav">
                        <a class="nav-link" href="/projetofinal/home/home">Início</a>
                        <a class="nav-link" href="/projetofinal/home/partnership">Parcerias</a>
                        <a class="nav-link" href="/projetofinal/views/admin/dashboard.php">Dashboard</a>
                        <ul class="nav ml-auto">
                            <li class="nav-item"> 
                                <p id="session-token"> <?php echo "Olá, ".$_SESSION['name']."!" ?> </p>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="/projetofinal/user/logout">Sair</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <body>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-4 col-md-offset-4">
                    <div class="content-box">
                        <h1 id="register-label">Cadastro de Empresa</h1>
                        <form class="login-form" action="/projetofinal/company/store" method="post">
                            <input class="input-box" name="name" placeholder="Nome">
                            <input class="input-box" name="federation" placeholder="Federação">          
                            <button type="submit" class="btn btn-primary"> Cadastrar </button>        
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script src="../../../assets/jquery/jquery-3.5.0.min.js"></script>
    <script src="../../../assets/jquery/jquery-functions.js"></script>
</html>