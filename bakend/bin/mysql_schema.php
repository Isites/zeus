<?php

defined('DS') || define('DS', DIRECTORY_SEPARATOR);
defined('BASE_PATH') || define('BASE_PATH', dirname(__DIR__));

require_once BASE_PATH . '/vendor/autoload.php';

include_once BASE_PATH . '/etc/env_config.php';

if(isset($siteConf["stage"]) && file_exists(BASE_PATH . '/etc/stageConf.' . $siteConf["stage"] .'.php')) {
    include_once BASE_PATH . '/etc/stageConf.' . $siteConf["stage"] .'.php';
}

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;

$config = Setup::createAnnotationMetadataConfiguration(array(
    BASE_PATH . "/src/Model"
), true);


$entityManager = EntityManager::create($siteConf["doctrine_orm"], $config);