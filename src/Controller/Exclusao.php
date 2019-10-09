<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Curso;
use Alura\Cursos\Infra\EntityManagerCreator;

class Exclusao implements InterfaceControladorRequisicao
{
    /**
     * @var \Doctrine\ORM\EntityManagerInterface
     */
    private $entityManager;

    public function __construct()
    {
        $this->entityManager = ( new EntityManagerCreator())
        ->getEntityManager();
    }

    public function processaRequisicao(): void
    {
        $id = filter_input(INPUT_GET ,
            'id' ,
            FILTER_VALIDATE_INT
        );

        if ( is_null($id) || $id === false ){
            header('Location: /listar-cursos');
            return;
        }

        $curso = $this->entityManager->getReference(Curso::class, $id); // Pegando a referencia deste curso
        $this->entityManager->remove($curso);
        $this->entityManager->flush(); // Mnada a alteração para o banco de dados

        header('Location: /listar-cursos');
    }
}