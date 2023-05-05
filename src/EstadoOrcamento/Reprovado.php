<?php

namespace DesignPatternComportamental\EstadoOrcamento;

use DesignPatternComportamental\Orcamento;
use DomainException;

class Reprovado extends EstadoOrcamento
{
    public function calcularDescontoExtra(Orcamento $orcamento): float
    {
        throw new DomainException(
            'Um orçamento reprovado não pode receber um desconto'
        );
    }

    public function finalizar(Orcamento $orcamento): void
    {
        $orcamento->estadoOrcamento = new Finalizado();
    }
}