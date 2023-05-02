<?php

use DesignPattern\CalculadoraDeDescontos;
use DesignPattern\CalculadoraDeImpostos;
use DesignPattern\Impostos\ICMS;
use DesignPattern\Impostos\ISS;
use DesignPattern\Orcamento;

require_once "vendor/autoload.php";

/*
$calculadora = new CalculadoraDeImpostos();

$orcamento = new Orcamento();
$orcamento->valor = 100;

echo "Imposto a Pagar\n";
echo "ICMS: " . $calculadora->calcular($orcamento, new ICMS());
echo "\n";
echo "ISS: " . $calculadora->calcular($orcamento, new ISS());
*/

$calculadoraDeconto = new CalculadoraDeDescontos();

$orcamento = new Orcamento();
$orcamento->valor = 600;
$orcamento->quantidadeItens = 7;

echo $calculadoraDeconto->calcularDescontos($orcamento);