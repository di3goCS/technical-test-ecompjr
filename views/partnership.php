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
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h1 class="principal-text"> Mantenedores </h1>
                    <p class="sub-text"> O Programa Mantenedores insere as organizações em todas as
                        interações e projetos estratégicos da Brasil Júnior para gerar conexões e uma experiência transformadora
                        com o público universitário.</p>
                     <p class="sub-text"> Focando em fortalecer a marca empregadora e gerar maior conexão as oportunidades de carreiras.</p>
                </div>
                <div id="carouselMantenedores" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselMantenedores" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselMantenedores" data-slide-to="1"></li>
                        <li data-target="#carouselMantenedores" data-slide-to="2"></li>
                        <li data-target="#carouselMantenedores" data-slide-to="3"></li>
                        <li data-target="#carouselMantenedores" data-slide-to="4"></li>
                        <li data-target="#carouselMantenedores" data-slide-to="5"></li>
                        <li data-target="#carouselMantenedores" data-slide-to="6"></li>
                        <li data-target="#carouselMantenedores" data-slide-to="7"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="../assets/img/partners/sicoob.png" alt="Sicoob">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="../assets/img/partners/ambev.png" alt="Ambev">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="../assets/img/partners/bradesco.png" alt="Bradesco">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="../assets/img/partners/eureca.png" alt="Eureca">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="../assets/img/partners/pirelli.png" alt="Pirelli">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="../assets/img/partners/movile.png" alt="Movile">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="../assets/img/partners/kraft-heinz.png" alt="Kraft-Heinz">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="../assets/img/partners/raizen.png" alt="Raizen">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselMantenedores" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselMantenedores" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12">
                    <h1 class="principal-text"> Patrocinadores </h1>
                    <p class="sub-text"> O Programa Patrocinadores envolve a participação em determinadas ações 
                        adaptadas a realidade do parceiro para suprir suas necessidades e expectativas. </p>
                    <p class="sub-text"> O parceiro participa de quase todas as interações da Brasil Júnior,
                        exceto do Encontro Nacional de Empresas Juniores. </p>
                </div>
                <div id="carouselPatrocinadores" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselPatrocinadores" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselPatrocinadores" data-slide-to="1"></li>
                        <li data-target="#carouselPatrocinadores" data-slide-to="2"></li>
                        <li data-target="#carouselPatrocinadores" data-slide-to="3"></li>
                        <li data-target="#carouselPatrocinadores" data-slide-to="4"></li>
                        <li data-target="#carouselPatrocinadores" data-slide-to="5"></li>
                        <li data-target="#carouselPatrocinadores" data-slide-to="6"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="../assets/img/partners/arco.png" alt="Arco">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="../assets/img/partners/heineken.png" alt="Heineken">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="../assets/img/partners/quero-educacao.png" alt="Quero Educação">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="../assets/img/partners/tetra-pak.png" alt="Tetra-Pak">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="../assets/img/partners/ultragaz.png" alt="Ultragaz">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100 mx-auto" src="../assets/img/partners/unilever.png" alt="Unilever" height="200px">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="../assets/img/partners/xp-inc.png" alt="XP Inc.">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselPatrocinadores" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselPatrocinadores" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12">
                    <h1 class="principal-text"> Institucionais </h1>
                    <p class="sub-text">Os parceiros institucionais da Brasil Júnior funcionam como 
                        grandes mentores alavancando determinados projetos estratégicos por meio de conhecimentos reais.</p>
                </div>
                <div id="carouselInstitucionais" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselInstitucionais" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselInstitucionais" data-slide-to="1"></li>
                        <li data-target="#carouselInstitucionais" data-slide-to="2"></li>
                        <li data-target="#carouselInstitucionais" data-slide-to="3"></li>
                        <li data-target="#carouselInstitucionais" data-slide-to="4"></li>
                        <li data-target="#carouselInstitucionais" data-slide-to="5"></li>
                        <li data-target="#carouselInstitucionais" data-slide-to="6"></li>
                        <li data-target="#carouselInstitucionais" data-slide-to="7"></li>
                        <li data-target="#carouselInstitucionais" data-slide-to="8"></li>
                        <li data-target="#carouselInstitucionais" data-slide-to="9"></li>
                        <li data-target="#carouselInstitucionais" data-slide-to="10"></li>
                        <li data-target="#carouselInstitucionais" data-slide-to="11"></li>
                        <li data-target="#carouselInstitucionais" data-slide-to="12"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="../assets/img/partners/aceleratech-ace.png" alt="Aceleratech Ace">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="../assets/img/partners/bain-e-company.png" alt="Bain & Company">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="../assets/img/partners/conaje.png" alt="Conaje">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="../assets/img/partners/emerge.png" alt="Emerge">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="../assets/img/partners/endeavor.png" alt="Endeavor">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="../assets/img/partners/folha.png" alt="Folha">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="../assets/img/partners/fundacao-estudar.png" alt="Fundação Estudar">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="../assets/img/partners/gp-jr.png" alt="GP Jr">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="../assets/img/partners/jade.png" alt="Jade">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="../assets/img/partners/jc3.png" alt="Junior Consulting Confederation of Canada">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="../assets/img/partners/jet.png" alt="Junior Enterprises of Tunisia">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="../assets/img/partners/politize.png" alt="Politize">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="../assets/img/partners/vetor-brasil.png" alt="Vetor Brasil">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselInstitucionais" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselInstitucionais" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>