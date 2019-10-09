<?php

require __DIR__ . '/../vendor/autoload.php';

//use Alura\Cursos\Controller\FormularioInsercao;
use Alura\Cursos\Controller\InterfaceControladorRequisicao;
//use Alura\Cursos\Controller\ListarCursos;
//use Alura\Cursos\Controller\Persistencia;


$caminho = $_SERVER['PATH_INFO'] ;
//Aqui pega o retur na routes.php
$rotas = require __DIR__ . '/../config/routes.php';

if (!array_key_exists($caminho, $rotas)){
//    echo "Erro 404";
//    header('', false, 404);
    http_response_code(404);
    exit();
}

$classeControladora = $rotas[$caminho];
/** @var InterfaceControladorRequisicao $controlador */
$controlador = new $classeControladora();
$controlador->processaRequisicao();
//
//switch ($_SERVER['PATH_INFO']) {
//    case '/listar-cursos':
//        $controlador = new ListarCursos();
//        $controlador->processaRequisicao();
//        break;
//    case '/novo-curso':
//        $controlador = new FormularioInsercao();
//        $controlador->processaRequisicao();
//        break;
//    case '/salvar-curso':
//        $controlador = new Persistencia();
//        $controlador->processaRequisicao();
//        break;
//    default:
//        echo "Erro 404";
//        break;
//}
