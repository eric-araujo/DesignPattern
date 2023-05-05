<?php

namespace DesignPatternComportamental\AcoesAoGerarPedido;

use DesignPatternComportamental\Pedido;

interface AcaoAposGerarPedidoInterface
{
    public function executaAcao(Pedido $pedido): void;
}