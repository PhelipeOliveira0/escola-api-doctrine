<?php

    namespace php\Doctrine\Helper;

    use Doctrine\ORM\EntityManager;
    use Doctrine\ORM\EntityManagerInterface;
    use Doctrine\ORM\Tools\Setup;

    class EntityManagerFactury{

        public function getEntityManager(){


            $rootDir = __DIR__ . "/../..";

            $config = Setup::createAnnotationMetadataConfiguration([$rootDir . "/src"],true);
            $conexao = ["driver"=>"pdo_sqlite","path"=>$rootDir."/var/data/banco.sqlite"];
            return EntityManager::create($conexao,$config);

        }

    }



?>