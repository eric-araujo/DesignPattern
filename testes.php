<?php

use DesignPatternComportamental\CalculadoraDeDescontos;
use DesignPatternComportamental\CalculadoraDeImpostos;
use DesignPatternComportamental\Impostos\ICMS;
use DesignPatternComportamental\Impostos\ICPP;
use DesignPatternComportamental\Impostos\IKCV;
use DesignPatternComportamental\Impostos\ISS;
use DesignPatternComportamental\Orcamento;

require_once "vendor/autoload.php";

$calculadora = new CalculadoraDeImpostos();

$orcamento = new Orcamento();
$orcamento->quantidadeItens = 5;
$orcamento->valor = 600;
$orcamento->aprovar();
$orcamento->aplicarDescontoExtra();

echo "Imposto a Pagar" . PHP_EOL;
echo "ICMS: " . $calculadora->calcular($orcamento, new ICMS());
echo PHP_EOL;
echo "ISS: " . $calculadora->calcular($orcamento, new ISS());
echo PHP_EOL;
echo "ICPP: " . $calculadora->calcular($orcamento, new ICPP());
echo PHP_EOL;
echo "IKCV: " . $calculadora->calcular($orcamento, new IKCV());

echo PHP_EOL;

echo "========= Calculadora de Desconstos =========" . PHP_EOL;

$calculadoraDeconto = new CalculadoraDeDescontos();

$orcamento = new Orcamento();
$orcamento->valor = 600;
$orcamento->quantidadeItens = 7;

echo $calculadoraDeconto->calcularDescontos($orcamento);
