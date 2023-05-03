<?php

namespace DesignPattern\EstadoOrcamento;

use DesignPattern\Orcamento;

class Aprovado extends EstadoOrcamento
{
    public function calcularDescontoExtra(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.02;
    }

    public function finalizar(Orcamento $orcamento): void
    {
        $orcamento->estadoOrcamento = new Finalizado();
    }
}