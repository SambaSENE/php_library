<?php

use App\Db\DbConnect;

require __DIR__."/vendor/autoload.php";

$conect = DbConnect::getInstance();

var_dump($conect);