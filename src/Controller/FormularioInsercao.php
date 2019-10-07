<?php

namespace Alura\Cursos\Controller;

class FormularioInsercao implements InterfaceControladorRequisicao
{
    public function processaRequisicao(): void
    {
        $titutlo = 'Novo curso';
        require __DIR__ . '/../../view/cursos/formulario.php';
    }
}