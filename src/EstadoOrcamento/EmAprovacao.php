<?php

namespace DesignPattern\EstadoOrcamento;

use DesignPattern\Orcamento;

class EmAprovacao extends EstadoOrcamento
{
    public function calcularDescontoExtra(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.05;
    }

    public function aprovar(Orcamento $orcamento): void
    {
        $orcamento->estadoOrcamento = new Aprovado();
    }

    public function reprovar(Orcamento $orcamento): void
    {
        $orcamento->estadoOrcamento = new Reprovado();
    }
}