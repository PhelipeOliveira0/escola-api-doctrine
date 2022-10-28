<?php

    require_once  __DIR__ . "/../vendor/autoload.php";

    use php\Doctrine\Entity\{Aluno,Telefone};
    use php\Doctrine\Helper\EntityManagerFactury;


    $entityManagerFactury = new EntityManagerFactury();
    $entityManager = $entityManagerFactury->getEntityManager();


    $alunoRepository = $entityManager->getRepository(Aluno::class);

    $lista = $alunoRepository->findAll();

    foreach($lista as $aluno){

        $telefones = $aluno->telefones()->map(function (Telefone $telefone) {
            return $telefone->numero();
        })->toArray();
    echo "ID: {$aluno->id()}\n Nome: {$aluno->nome()} \n";
    echo "Telefones: " . implode(', ', $telefones);

    echo "\n\n";
}


    // $jorge = $alunoRepository->find(5);

    // echo $jorge->nome();

    $entityManager->flush();

    $marcosN = $alunoRepository->findBy(["Nome"=>"Marcos"]);
    
    $marcos1 = $alunoRepository->findOneBy(["Nome"=>"Marcos"]);
  
    var_dump($marcosN);
?>