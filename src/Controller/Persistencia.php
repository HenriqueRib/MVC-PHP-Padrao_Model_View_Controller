<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Curso;
use Alura\Cursos\Infra\EntityManagerCreator;

class Persistencia implements InterfaceControladorRequisicao
{
    /**
     * @var \Doctrine\ORM\EntityManagerInterface
     */
    private $entityManager;

    public function __construct()
    {

        //inserir no banco (usamos o doctrine)
        $this->entityManager = (new EntityManagerCreator())
            ->getEntityManager();
    }

    public function processaRequisicao(): void
   {
       //pegar dados do formulario
//        $descricao = $_POST['descricao'];
        //Montar modelo curso
        $descricao = filter_input(
            INPUT_POST,
            'descricao',
            FILTER_SANITIZE_STRING
        );

        $curso = new Curso(); //Criamos um curso
//        $curso->setDescricao($_POST['descricao']); não usara aqui porque estamos usando $descricao
        $curso->setDescricao($descricao);
        //inserir no banco (usamos o doctrine)
        $this->entityManager->persist($curso); //Salvo
        $this->entityManager->flush();  //Mandar para o banco de dados

        header('Location: /listar-cursos', true , 302);
    }
}