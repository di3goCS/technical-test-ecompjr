<?php session_start(); ?>


<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../assets/css/home.css">
        <link rel="shortcut icon" type="image/png" href="../assets/img/favicon.png"/>
        <title>Página Inicial</title>
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
            <div class="row">
                <div class="col-12">
                    <h1 class="principal-text"> MEJ - Movimento Empresa Júnior </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-12 column-5 align-center hvr-grow">
                    <div class="row justify-content-between">
                        <h1 class="principal-text"> Missão </h1>
                        <img src="../assets/img/missao.png" class="img-fluid" alt="Ícone Missão" width="8%">
                    </div>
                    <p class="sub-text"> Formar por meio da vivência empresarial empreendedores
                         comprometidos e capazes de transformar o Brasil. </p>
                </div>
                <div class="col-lg-6 col-sm-12 column-4 align-center hvr-grow">
                    <div class="row justify-content-between">
                        <h1 id="white-background" class="principal-text"> Visão </h1>
                        <img src="../assets/img/visao.png" class="img-fluid" alt="Ícone Visão" width="8%">
                    </div>
                    <p class="sub-text"> Mais fortes e conectados, em todo Brasil,
                         formando líderes que fazem mais projetos de alto impacto. </p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12 column-3 justify-content-center">
                    <h1 class="principal-text"> Valores </h1>
                    <img src="../assets/img/valor.png" class="img-fluid" alt="Ícone Valores" height="8%" width="8%">
                    <div class="row justify-content-center"> 
                        <div class="col-lg-2 column-4 subcolumn hvr-grow">
                            <div class="container-fluid">
                                <h5 class="secundary-heading">Postura empreendedora</h5>
                                <p class="secundary-text"> Inconformismo, visão, pensamento inovador e capacidade
                                    de realização são características que nos definem </p>
                            </div>
                        </div>
                        <div class="col-lg-2 column-5 subcolumn hvr-grow">
                            <h5 class="secundary-heading">Compromisso com resultado</h5>
                            <p class="secundary-text"> Buscamos gerar valor para nossas partes interessadas e
                                 nos comprometemos com a superação das suas expectativas </p>
                        </div>
                        <div class="col-lg-2 column-4 subcolumn hvr-grow">
                            <h5 class="secundary-heading">Orgulho de ser MEJ</h5>
                            <p class="secundary-text"> Somos apaixonados pelo nosso propósito e trabalhamos
                                 por um movimento em que acreditamos </p>
                        </div>
                        <div class="col-lg-2 column-5 subcolumn hvr-grow">
                            <h5 class="secundary-heading">Transparência</h5>
                            <p class="secundary-text"> Temos plena consciência que um futuro melhor se faz 
                                com ética e compromisso com a verdade </p>
                        </div>
                        <div class="col-lg-2 column-4 subcolumn hvr-grow">
                            <h5 class="secundary-heading">Sinergia</h5>
                            <p class="secundary-text"> A despeito de nossa diversidade, somos unidos por 
                                visões compartilhadas e trabalhamos em cooperação</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <h1 class="principal-text"> Brasil Júnior </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 column-6 justify-content-center">
                    <h1 class="principal-text"> O que nos torna únicos? </h1>
                    <p class="sub-text"> "Representar e potencializar o Movimento Empresa Júnior brasileiro como agente 
                        de formação de empreendedores comprometidos e capazes de transformar o país" </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 column-2 justify-content-center">
                    <h1 class="principal-text"> Como atuamos? </h1>
                    <p class="sub-text"> Estes são os produtos através dos quais atuamos: </p>
                    <div class="row justify-content-center">
                        <div class="col-lg-3 column-1 subcolumn hvr-grow">
                            <h5 class="secundary-heading">ENEJ</h5>
                            <p class="secundary-text"> Resultado de um sonho do movimento, o Encontro Nacional de Empresas
                                 Juniores foi realizado pela primeira vez em 1993 e até hoje continua inspirando e formando 
                                 melhores empresários juniores. Com o objetivo de conectar, e potencializar os resultados do 
                                 Movimento Empresa Júnior brasileiro o ENEJ transitou por diversos estados do país e nunca 
                                 deixou de ser organizado, apesar da grandiosidade do projeto. </p>
                        </div>
                        <div class="col-lg-3 column-6 subcolumn hvr-grow">
                            <h5 class="secundary-heading">Comunidade Pós-Júnior</h5>
                            <p class="secundary-text"> Será que estamos mesmo transformando o Brasil? Já imaginou conhecer
                                os pós-juniores de todo o país e poder se conectar com todos eles em uma comunidade? Esse
                                é o convite para gerar maiores benefícios para nossa rede, criando a conexão dos
                                pós-juniores com o mercado, com o MEJ e muito mais! </p>
                        </div>
                        <div class="col-lg-3 column-1 subcolumn hvr-grow">
                            <h5 class="secundary-heading">MEJ Carreiras</h5>
                            <p class="secundary-text"> Um portal feito pra você. Desenhado, planejado e preparado
                                 especialmente para você se conhecer, se inspirar e se encontrar no mercado de 
                                 trabalho. O mesmo sonho, novas oportunidades. </p>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-3 column-6 subcolumn hvr-grow">
                            <h5 class="secundary-heading">Encontro de líderes do MEJ</h5>
                            <p class="secundary-text"> Um momento de conexão com todos os líderes que conduzirão o
                                 futuro do MEJ. Autoconhecimento, inspiração, construção e conhecimento para crescer.
                                  Este é o chamado para os inconformados que transformarão o nosso país! </p>
                        </div>
                        <div class="col-lg-3 column-1 subcolumn hvr-grow">
                            <h5 class="secundary-heading">Selo EJ</h5>
                            <p class="secundary-text"> O Selo EJ e o Selo Federação são produtos da Brasil Júnior que
                                 tem o objetivo de resguardar a rede contra problemas jurídicos e fiscais básicos, 
                                 além de assegurar a preservação do conceito nacional de Empresa Júnior e a observância
                                  da Lei nº 13.267/16. </p>
                        </div>
                        <div class="col-lg-3 column-6 subcolumn hvr-grow">
                            <h5 class="secundary-heading">Universidades Empreendedoras</h5>
                            <p class="secundary-text"> Se o Brasil se tornar uma grande potência sem uma grande
                                 Universidade de ponta a nível mundial, será o primeiro caso da história de um 
                                 grande país.” Convidamos você para um debate em que propomos um Brasil melhor,
                                  por meio de Universidades melhores! </p>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-3 column-6 subcolumn hvr-grow">
                            <h5 class="secundary-heading">Suporte a federações</h5>
                            <p class="secundary-text"> Buscando impulsionar o impacto do Movimento Empresa júnior
                                 nos estados brasileiros, catalisamos os resultados das federações por meio de 
                                 acompanhamento periódico, treinamentos, visitas, banco de práticas e cocriação 
                                 de produtos.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <footer>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1 class="principal-text"> Acompanhe-nos nas redes sociais: </h1>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col-lg-12 col-sm-12 column-4">
                    <div id="contact" class="row justify-content-between">
                        <ul id="contact" class="justify-content-between">
                            <a href="https://www.instagram.com/bjnoinsta/" target="_blank"><img src="../assets/img/instagram.png" class="img-fluid icon" alt="Instagram"> </a>
                            <a href="https://www.facebook.com/brasiljunior/" target="_blank"><img src="../assets/img/facebook.png" class="img-fluid icon" alt="Facebook"> </a>
                            <a href="https://www.youtube.com/channel/UCJpa3dGqxDUkZq3tFDf0l4Q" target="_blank"><img src="../assets/img/youtube.png" class="img-fluid icon" alt="Youtube"> </a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div>Ícones (Missão e Visão) feitos por <a href="https://www.flaticon.com/br/autores/eucalyp" title="Eucalyp">Eucalyp</a> from <a href="https://www.flaticon.com/br/" title="Flaticon">www.flaticon.com</a></div>
        <div>Ícone (Valores) feito por <a href="https://www.flaticon.com/br/autores/icongeek26" title="Icongeek26">Icongeek26</a> from <a href="https://www.flaticon.com/br/" title="Flaticon">www.flaticon.com</a></div>
        <div>Ícones (Redes Sociais) feitos por <a href="https://www.flaticon.com/br/autores/freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/br/" title="Flaticon">www.flaticon.com</a></div>
    </footer>
</html>