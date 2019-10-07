<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Curso Alura feito pelo Henrique</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="st.css">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="fontawesome/css/all.css">

</head>
<body>
<!-- fixed-top -->
<nav class="navbar navbar-expand-md navbar-dark  " style="background: #246693">

    <p class="m-3" style="color: white;">
        <a href="/listar-cursos" class="navbar-brand" title="Voltar para o inicio">
            Model View Controler
        </a>
    </p>
    <!-- Button hambuger -->
    <button class="navbar-toggler ml-auto" data-toggle="collapse" data-target="#nav-target">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="d-none d-md-block">
        <a href="/listar-cursos" class="navbar-brand" title="Voltar para o inicio">
            <!--            <img src="imagens/logo.png" width="25%" align="left" >-->
        </a>
    </div>
    <!-- DIV DOS MENUS -->
    <div class="collapse navbar-collapse" id="nav-target">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item ">
                <a href="listar-cursos.php" class="nav-link active"  title="Ir para a página inicial">Home</a>
            </li>
            <!--            <li class="nav-item">-->
            <!--                <a href="HsystemQS.html" class="nav-link" title="Ir para a página Quem somos">Quem&nbsp;sou</a>-->
            <!--            </li>-->
            <!--            <li class="nav-item navbar-dark">-->
            <!--                <a href="HsystemP.html" class="nav-link" title="Ir para a página Projetos">Projetos</a>-->
            <!--            </li>-->
            <!--            <li class="nav-item">-->
            <!--                <a href="HsystemMC.html" class="nav-link" title="ir ao Meu contato">Contato</a>-->
            <!--            </li>-->
        </ul>
    </div>
</nav>



<div class="container">
    <div class="jumbotron">
        <h1><?= $titutlo; ?></h1>
    </div>