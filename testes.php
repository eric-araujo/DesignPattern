<?php

use DesignPattern\CalculadoraDeImpostos;
use DesignPattern\Impostos\ICMS;
use DesignPattern\Impostos\ICPP;
use DesignPattern\Impostos\IKCV;
use DesignPattern\Impostos\ISS;
use DesignPattern\Orcamento;

require_once "vendor/autoload.php";

$calculadora = new CalculadoraDeImpostos();

$orcamento = new Orcamento();
$orcamento->quantidadeItens = 5;
$orcamento->valor = 600;
$orcamento->aprovar();
$orcamento->aplicarDescontoExtra();

echo "Imposto a Pagar\n";
echo "ICMS: " . $calculadora->calcular(
    $orcamento,
    new ICMS(
        new ISS(
            new ICPP(
                new IKCV()
            )
        )
    )
);
echo "\n";
echo "ISS: " . $calculadora->calcular($orcamento, new ISS());
echo "\n";
echo "ICPP: " . $calculadora->calcular($orcamento, new ICPP());
echo "\n";
echo "IKCV: " . $calculadora->calcular($orcamento, new IKCV());

/**
 * $calculadoraDeconto = new CalculadoraDeDescontos();
 * 
 * $orcamento = new Orcamento();
 * $orcamento->valor = 600;
 * $orcamento->quantidadeItens = 7;
 * 
 * echo $calculadoraDeconto->calcularDescontos($orcamento);
 */
