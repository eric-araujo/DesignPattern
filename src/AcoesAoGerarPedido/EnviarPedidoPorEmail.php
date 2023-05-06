<?php

namespace DesignPattern\AcoesAoGerarPedido;

use DesignPattern\Pedido;

class EnviarPedidoPorEmail implements AcaoAposGerarPedidoInterface
{
    public function executaAcao(Pedido $pedido): void
    {
        echo "Enviando e-mail de pedido gerado" . PHP_EOL;
    }
}