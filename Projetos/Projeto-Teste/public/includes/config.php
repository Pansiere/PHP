<?php

// Incluindo arquivos de funções e classes
require_once 'classes/Db.php';

use Includes\Classes\Db;

$teste = new Db();
$teste->connect();
