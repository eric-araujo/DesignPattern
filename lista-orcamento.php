<?php

use DesignPatternComportamental\ListaDeOrcamentos;
use DesignPatternComportamental\Orcamento;

require_once "vendor/autoload.php";

$listaOrcamento = [];

$orcamento1 = new Orcamento();
$orcamento1->quantidadeItens = 7;
$orcamento1->aprovar();
$orcamento1->valor = 1500.75;

$orcamento2 = new Orcamento();
$orcamento2->quantidadeItens = 3;
$orcamento2->reprovar();
$orcamento2->valor = 150;

$orcamento3 = new Orcamento();
$orcamento3->quantidadeItens = 5;
$orcamento3->aprovar();
$orcamento3->finalizar();
$orcamento3->valor = 1350;

$listaOrcamento = new ListaDeOrcamentos();
$listaOrcamento->adicionar($orcamento1);
$listaOrcamento->adicionar($orcamento2);
$listaOrcamento->adicionar($orcamento3);

$listaOrcamento->buscarOrcamentosFinalizados();

foreach ($listaOrcamento as $orcamento) {
    echo "Valor: " . $orcamento->valor . PHP_EOL;
    echo "Estado: " . get_class($orcamento->estadoOrcamento) . PHP_EOL;
    echo "Qtd. Itens: " . $orcamento->quantidadeItens . PHP_EOL;
    echo PHP_EOL;
}