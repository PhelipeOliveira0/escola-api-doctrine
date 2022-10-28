<?php

    require_once  __DIR__ . "/../vendor/autoload.php";

    use php\Doctrine\Entity\Aluno;
    use php\Doctrine\Helper\EntityManagerFactury;


    $entityManagerFactury = new EntityManagerFactury();
    $entityManager = $entityManagerFactury->getEntityManager();


    $id = $argv[1];

    $aluno = $entityManager->getReference(Aluno::class, $id);

    $entityManager->remove($aluno);

    $entityManager->flush();


?>