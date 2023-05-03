<?php

require_once "vendor/autoload.php";

use DesignPattern\{GerarPedido, GerarPedidoHandler};
use DesignPattern\AcoesAoGerarPedido\{CriarPedidoNoBanco, EnviarPedidoPorEmail, LogGerarPedido};

$valorOrcamento = $argv[1];
$numeroDeItens = $argv[2];
$nomeCliente = $argv[3];

$gerarPedido = new GerarPedido($valorOrcamento, $numeroDeItens, $nomeCliente);
$gerarPedidoHandler = new GerarPedidoHandler();
$gerarPedidoHandler->adicionarAcaoAoGerarPedido(new CriarPedidoNoBanco());
$gerarPedidoHandler->adicionarAcaoAoGerarPedido(new LogGerarPedido());
$gerarPedidoHandler->adicionarAcaoAoGerarPedido(new EnviarPedidoPorEmail());
$gerarPedidoHandler->executar($gerarPedido);