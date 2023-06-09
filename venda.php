<?php

use DesignPattern\Venda\{VendaProdutoFactory, VendaServicoFactory};

require_once 'vendor/autoload.php';

$fabricaVenda = new VendaProdutoFactory(100);
$venda = $fabricaVenda->criarVenda();
$imposto = $fabricaVenda->retornarImposto();

var_dump($venda, $imposto);

