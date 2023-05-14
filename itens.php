<?php

use DesignPattern\ItemOrcamento;
use DesignPattern\Orcamento;

require_once 'vendor/autoload.php';

$orcamento = new Orcamento();

$item1 = new ItemOrcamento();
$item1->definirValor(300);
$item2 = new ItemOrcamento();
$item2->definirValor(500);

$orcamento->adicionarItem($item1);
$orcamento->adicionarItem($item2);

$orcamentoAntigo = new Orcamento();
$item3 = new ItemOrcamento();
$item3->definirValor(150);

$orcamentoAntigo->adicionarItem($item3);

$orcamentoAntigo2 = new Orcamento();
$item4 = new ItemOrcamento();
$item4->definirValor(50);
$item5 = new ItemOrcamento();
$item5->definirValor(100);

$orcamentoAntigo2->adicionarItem($item4);
$orcamentoAntigo2->adicionarItem($item5);

$orcamento->adicionarItem($orcamentoAntigo);
$orcamento->adicionarItem($orcamentoAntigo2);

echo $orcamento->retornarValor();
