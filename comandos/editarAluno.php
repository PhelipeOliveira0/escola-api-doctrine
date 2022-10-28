<?php

    require_once  __DIR__ . "/../vendor/autoload.php";

    use php\Doctrine\Entity\Aluno;
    use php\Doctrine\Helper\EntityManagerFactury;


    $entityManagerFactury = new EntityManagerFactury();
    $entityManager = $entityManagerFactury->getEntityManager();


   

    $id = $argv[1];
    $nome = $argv[2];

    $aluno = $entityManager->find(Aluno::class,$id);
    $aluno->setNome($nome);



    $entityManager->flush();


?>