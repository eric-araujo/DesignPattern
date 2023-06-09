<?php

use DesignPattern\ItemOrcamento;
use DesignPattern\NotaFiscal\{ConstrutorNotaFiscalProduto, ConstrutorNotaFiscalServico};

require_once 'vendor/autoload.php';

$item1 = new ItemOrcamento();
$item1->definirValor(10);

$item2 = new ItemOrcamento();
$item2->definirValor(10);

$item3 = new ItemOrcamento();
$item3->definirValor(10);

$notaFiscal = (new ConstrutorNotaFiscalServico())
    ->definirEmpresa('123456789', 'Eric Lima')
    ->adicionarItem($item1)
    ->adicionarItem($item2)
    ->adicionarItem($item3)
    ->definirObservacoes('Está nota fiscal foi construída com construtor')
    ->construir();

echo $notaFiscal->valorImpostos;