<?php
session_start();
require_once "vendor/autoload.php";


use Doctrine\ORM\ORMSetup;
use Doctrine\ORM\EntityManager;

$ini = parse_ini_file('config.ini');
// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;
$proxyDir = null;
$cache = null;
$useSimpleAnnotationReader = false;
$config = ORMSetup::createAnnotationMetadataConfiguration(array(__DIR__ . "/src/models"), $isDevMode, $proxyDir, $cache, $useSimpleAnnotationReader);

// database configuration parameters
$conn = array(
    'driver'   => $ini['db_driver'],
    'host'     => $ini['db_host'],
    'dbname'   => $ini['db_name'],
    'user'     => $ini['db_user'],
    'password' => $ini['db_password']
);

// obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);
