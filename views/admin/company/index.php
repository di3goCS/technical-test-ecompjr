<?php
    require_once "../../../dataBase/Connection.php";
    require_once "../../../models/User.php";
    require_once "../../../controllers/UserController.php";
    require_once "../../../models/Company.php";
    require_once "../../../controllers/CompanyController.php";
    UserController::verifyLogin();
?>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../../../assets/css/dashboard.css">
        <title>Empresas</title>
    </head>
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12" id="mother">
                    <nav class="nav">
                        <a class="nav-link" href="/projetofinal/home/home">Início</a>
                        <a class="nav-link" href="/projetofinal/home/partnership">Parcerias</a>
                        <a class="nav-link" href="/projetofinal/views/admin/dashboard.php">Dashboard</a>
                        <ul class="nav ml-auto">
                            <li class="nav-item"> 
                                <p> <?php echo "Olá, ".$_SESSION['name']."!" ?> </p>
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
        <div class="container">
            <?php
                $companys = CompanyController::all();
                if ($companys == false){ 
            ?>
                <h1 class="text-div"> Não há empresas cadastradas. </h1>
            <?php } else { ?>
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th>Nome</th>
                            <th>Federação</th>
                            <th>Opções</th>
                        </tr>
                    <?php foreach ($companys as $company) {
                        $id = $company->getId();
                    ?>
                    <tr>
                        <td> <?php echo $company->getName() ?> </td>
                        <td> <?php echo $company->getFederation() ?> </td>
                        <td>
                            <a href="/projetofinal/company/edit/<?php echo $id?>">
                                <button class="btn btn-success" id="table-btn">Editar</button>
                            </a>
                            <a href="/projetofinal/company/delete/<?php echo $id?>">
                                <button class="btn btn-danger" id="table-btn">Excluir</button>
                            </a>
                        </td>
                    </tr>
                    </br>
            <?php
                    }
                    ?>
                    </table>
                    </div>
            <?php
                }
            ?>
            <div class="flex-box">
                <a class="btn btn-info" href="/projetofinal/company/create" role="button">Cadastrar empresa</a>
            </div>
            </br>
        </div>
    </body>
</html>