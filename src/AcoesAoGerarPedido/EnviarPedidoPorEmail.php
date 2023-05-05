<?php

namespace DesignPatternComportamental\AcoesAoGerarPedido;

use DesignPatternComportamental\Pedido;

class EnviarPedidoPorEmail implements AcaoAposGerarPedidoInterface
{
    public function executaAcao(Pedido $pedido): void
    {
        echo "Enviando e-mail de pedido gerado" . PHP_EOL;
    }
}