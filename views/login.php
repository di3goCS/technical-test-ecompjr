<?php
    session_start(); 
?>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../assets/css/login.css">
        <link rel="shortcut icon" type="image/png" href="../assets/img/favicon.png"/>
        <title>Página de login</title>
    </head>
    <header>
        <ul class="nav justify-content-left">
            <li class="nav-item">
                <a class="nav-link" href="/projetofinal/home/home">Página Inicial</a>
            </li>
        </ul>
    </header>
    <body>
        <div class="flex-box container-box">
            <div class="content-box">
                <h1 id="login-label">Login</h1>
                <form class= "login-form" action="/projetofinal/user/check" method="post">
                    <input class="input-box" name="email" placeholder="E-mail">        
                    <input type="password" class="input-box" name="password" placeholder="Senha">
                    <button type="submit" class="btn btn-primary"> Entrar </button>        
                </form>
            </div>
        </div>
    </body>
</html>