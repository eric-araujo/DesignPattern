<?php

namespace DesignPatternComportamental\EstadoOrcamento;

use DesignPatternComportamental\Orcamento;

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