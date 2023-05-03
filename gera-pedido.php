<?php

require_once "vendor/autoload.php";

use DesignPattern\{GerarPedido, Orcamento, Pedido};

$valorOrcamento = $argv[1];
$numeroDeItens = $argv[2];
$nomeCliente = $argv[3];

$gerarPedido = new GerarPedido($valorOrcamento, $numeroDeItens, $nomeCliente);
$gerarPedido->executar();

echo "Pedido criado com sucesso!" . PHP_EOL;
echo "Obrigado!";