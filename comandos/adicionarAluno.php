<?php

    require_once  __DIR__ . "/../vendor/autoload.php";
    use php\Doctrine\Entity\Telefone;
    use php\Doctrine\Entity\Aluno;
    use php\Doctrine\Helper\EntityManagerFactury;

    
    $entityManagerFactury = new EntityManagerFactury();
    $entityManager = $entityManagerFactury->getEntityManager();

    $aluno = new Aluno();

    $aluno->setNome($argv[1]);

    for($i = 2; $i < $argc; $i++ ){
        $numero = $argv[$i];
        $telefone = new Telefone();
        $telefone->setNumero($numero);
        $entityManager->persist($telefone);
        $aluno->addTelefone($telefone);
    }

    $entityManager->persist($aluno);

    $entityManager->flush();

?>