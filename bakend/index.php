<?php

defined('DS') || define('DS', DIRECTORY_SEPARATOR);
defined('BASE_PATH') || define('BASE_PATH', __DIR__);

require_once BASE_PATH . '/vendor/autoload.php';

include_once BASE_PATH . '/etc/env_config.php';

if(isset($siteConf["stage"]) && file_exists(BASE_PATH . '/etc/stageConf.' . $siteConf["stage"] .'.php')) {
    include_once BASE_PATH . '/etc/stageConf.' . $siteConf["stage"] .'.php';
}

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;
use Grace\Swoft\App;

$config = Setup::createAnnotationMetadataConfiguration(array(
    BASE_PATH . "/src/Model"
), true);
$entityManager = EntityManager::create($siteConf["doctrine_orm"], $config);

App::init(array(
    "bootScan" => array(
        'Zeus\Controllers',
        'Zeus\CustomAnnotation',
        'Zeus\Aspects',
        'Zeus\Beans',
    ),
    "CONTROLLER_PATH" => "/test/index/",
));

App::run();