<?php

namespace DesignPattern\AcoesAoGerarPedido;

use DesignPattern\Pedido;

class CriarPedidoNoBanco implements AcaoAposGerarPedidoInterface
{
    public function executaAcao(Pedido $pedido): void
    {
        echo "Salvando pedido no banco de dados" . PHP_EOL;
    }
}