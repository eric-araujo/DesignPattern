<?php

use DesignPattern\Orcamento;
use DesignPattern\Pedido\CriadorDePedido;

require_once 'vendor/autoload.php';

$pedidos = [];

$criadorPedido = new CriadorDePedido();
for ($i = 0; $i < 10000; $i++) {
    $orcamento = new Orcamento();

    $pedido = $criadorPedido->criar(
        "Eric Lima",
        date('Y-m-d'),
        $orcamento
    );

    $pedidos[] = $pedido;
}

echo memory_get_peak_usage();