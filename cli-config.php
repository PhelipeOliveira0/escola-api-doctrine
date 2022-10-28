<?php
use Doctrine\ORM\Tools\Console\ConsoleRunner;

use php\Doctrine\Helper\EntityManagerFactury;

require_once __DIR__ . '/vendor/autoload.php';

$entitymanagerFactury = new EntityManagerFactury();
$entityManager = $entitymanagerFactury->getEntityManager();

return ConsoleRunner::createHelperSet($entityManager);