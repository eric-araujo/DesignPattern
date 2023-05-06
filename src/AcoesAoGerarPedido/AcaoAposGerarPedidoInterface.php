<?php

namespace DesignPattern\AcoesAoGerarPedido;

use DesignPattern\Pedido;

interface AcaoAposGerarPedidoInterface
{
    public function executaAcao(Pedido $pedido): void;
}