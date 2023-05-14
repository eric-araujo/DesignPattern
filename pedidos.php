<?php

use DesignPattern\DadosExtrinsecosPedidos;
use DesignPattern\Orcamento;
use DesignPattern\Pedido;

require_once 'vendor/autoload.php';

$pedidos = [];

$nomeCliente = md5((string) rand(1, 100000));
$dataFinalizacao = new \DateTimeImmutable();

$dados = new DadosExtrinsecosPedidos($nomeCliente, $dataFinalizacao);

for ($i=0; $i < 10000; $i++) { 
    $pedido = new Pedido();
    $pedido->dados = $dados;
    $pedido->orcamento = new Orcamento();

    $pedidos[] = $pedido;
}

echo memory_get_peak_usage();