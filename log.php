<?php

use DesignPattern\Log\{StdoutLogManager, FileLogManager};

require_once 'vendor/autoload.php';

$logManager = new FileLogManager(__DIR__ . '/log.txt');
$logManager->montarLog('info', 'Testando Log 3');