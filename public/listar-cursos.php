<?php
require __DIR__ . '/../vendor/autoload.php';

$entityManager = (new \Alura\Cursos\Infra\EntityManagerCreator())->getEntityManager();
$repositorioDeCursos = $entityManager->getRepository(\Alura\Cursos\Entity\Curso::class);
$cursos = $repositorioDeCursos->findAll();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Curso Alura</title>

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
        <a href="listar-cursos.php" class="navbar-brand" title="Voltar para o inicio">
            Model View Controler
        </a>
    </p>
    <!-- Button hambuger -->
    <button class="navbar-toggler ml-auto" data-toggle="collapse" data-target="#nav-target">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="d-none d-md-block">
        <a href="listar-cursos.php" class="navbar-brand" title="Voltar para o inicio">
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
        <h1>Listar cursos</h1>
    </div>
    <ul class="list-group">
        <?php foreach ($cursos as $curso): ?>
            <li class="list-group-item">
                <?= $curso->getDescricao(); ?>
            </li>
        <?php endforeach; ?>
    </ul>
</div>
<footer class="mt-4 mb-4 bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-8 d-flex">
                <a class="align-self-center">Essa página foi desenvolvida por Henrique. Todos os direitos reservados &copy; .</a>
            </div>
            <div class="col-4 ml-auto">
                <a class="text-center">Redes</a>
                <br><br>
                <a href="http://linkedin.com/in/henrique-ribeiro-87245215b" target="_blank" title="Ir para a página do meu linkedin"><i class="fab fa-linkedin"style="font-size: 30px;"></i>
                </a>
                <a href="https://github.com/HenriqueRib"title="Ir para a página do meu Github"target="_blank"><i class="fab fa-github"style=" color: black;font-size: 30px;"></i>
                </a>
                <a href="https://twitter.com/Henri1q2"target="_blank"title="Ir para a página do meu Twitter"><i class="fab fa-twitter-square " style=" color: #00acee;font-size: 30px;" ></i></a>
            </div>

        </div>
    </div>

</footer>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>
</body>

</html>
