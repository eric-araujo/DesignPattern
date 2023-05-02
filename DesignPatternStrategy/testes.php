<?php

use DesignPatternStrategy\CalculadoraDeImpostos;
use DesignPatternStrategy\Impostos\ICMS;
use DesignPatternStrategy\Impostos\ISS;
use DesignPatternStrategy\Orcamento;

require_once "vendor/autoload.php";

$calculadora = new CalculadoraDeImpostos();

$orcamento = new Orcamento();
$orcamento->valor = 100;

echo "Imposto a Pagar\n";
echo "ICMS: " . $calculadora->calcular($orcamento, new ICMS());
echo "\n";
echo "ISS: " . $calculadora->calcular($orcamento, new ISS());