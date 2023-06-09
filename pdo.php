<?php

use DesignPattern\PDOConnection;

require_once 'vendor/autoload.php';

$pdo = PDOConnection::conectar('sqlite::memory:');
$pdo2 = PDOConnection::conectar('sqlite::memory:');

var_dump($pdo, $pdo2);