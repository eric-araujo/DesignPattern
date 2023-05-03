<?php

namespace DesignPattern\AcoesAoGerarPedido;

use DesignPattern\Pedido;

class LogGerarPedido implements AcaoAposGerarPedidoInterface
{
    public function executaAcao(Pedido $pedido): void
    {
        echo "Gerando log de pedido" . PHP_EOL;
    }
}