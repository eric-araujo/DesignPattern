<?php

require_once "vendor/autoload.php";

use DesignPatternComportamental\{GerarPedido, GerarPedidoHandler};
use DesignPatternComportamental\AcoesAoGerarPedido\{CriarPedidoNoBanco, EnviarPedidoPorEmail, LogGerarPedido};

if(empty($argv[1]) || empty($argv[2]) || empty($argv[3])) {
    echo "Faltam argumentos a serem informados!" . PHP_EOL;
    die;
}

$valorOrcamento = $argv[1];
$numeroDeItens = $argv[2];
$nomeCliente = $argv[3];

$gerarPedido = new GerarPedido($valorOrcamento, $numeroDeItens, $nomeCliente);
$gerarPedidoHandler = new GerarPedidoHandler();
$gerarPedidoHandler->adicionarAcaoAoGerarPedido(new CriarPedidoNoBanco());
$gerarPedidoHandler->adicionarAcaoAoGerarPedido(new LogGerarPedido());
$gerarPedidoHandler->adicionarAcaoAoGerarPedido(new EnviarPedidoPorEmail());
$gerarPedidoHandler->executar($gerarPedido);