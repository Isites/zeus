<?php
//之后可以考虑使用container
$siteConf = array_merge($siteConf, array(

    "doctrine_orm" => array(
        'driver'   => 'pdo_mysql',
        'user'     => 'root',
        'password' => 'root',
        'host' => '192.168.3.6',
        'dbname'   => 'backend',
    ),
));