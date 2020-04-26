<?php 
    require_once "../../../dataBase/Connection.php";
    require_once "../../../models/User.php";
    require_once "../../../controllers/UserController.php";
    require_once "../../../models/Company.php";
    UserController::verifyLogin();
    $company = Company::find($_GET['id']);
?>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../../../assets/css/dashboard.css">
        <title>Alteração Cadastral</title>
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
                <div class="col-3">
                    <div class="content-box">
                        <h1 id="register-label">Edição de cadastro</h1>
                        <form action="/projetofinal/company/update/<?php echo $company->getId() ?>" method="post">
                            <input class="input-box" type=text name="name" value="<?php echo $company->getName()?>" placeholder="Nome">
                            <input class="input-box" type=text name="federation" value="<?php echo $company->getFederation()?>" placeholder="Federação">          
                            <button class="btn btn-primary" type="submit"> Salvar </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>