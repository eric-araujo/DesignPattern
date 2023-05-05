<?php

namespace DesignPatternComportamental\AcoesAoGerarPedido;

use DesignPatternComportamental\Pedido;

class LogGerarPedido implements AcaoAposGerarPedidoInterface
{
    public function executaAcao(Pedido $pedido): void
    {
        echo "Gerando log de pedido" . PHP_EOL;
    }
}