<?php

namespace DesignPattern\Relatorio;

use DesignPattern\Pedido;

class PedidoExportado implements ConteudoExportadoInterface
{
    private Pedido $pedido;

    public function __construct(Pedido $pedido)
    {
        $this->pedido = $pedido;
    }

    public function exportar(): array
    {
        return [
            'data_finalizacao' => $this->pedido->dataFinalizacao->format('d/m/Y'),
            'nome_cliente' => $this->pedido->nomeCliente
        ];
    }
}
