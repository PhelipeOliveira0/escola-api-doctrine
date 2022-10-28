<?php 


    require_once  __DIR__ . "/../vendor/autoload.php";

    use php\Doctrine\Entity\Curso;
    use php\Doctrine\Helper\EntityManagerFactury;


    $entityManagerFactury = new EntityManagerFactury();
    $entityManager = $entityManagerFactury->getEntityManager();

    $curso = new Curso();

    $curso->setNome($argv[1]);

    $entityManager->persist($curso);
    $entityManager->flush();





?>