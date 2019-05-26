<?php

require_once __DIR__ . "/bin/mysql_schema.php";

return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($entityManager);
