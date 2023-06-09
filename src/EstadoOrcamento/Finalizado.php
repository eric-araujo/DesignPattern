<?php

namespace DesignPattern\EstadoOrcamento;

use DesignPattern\Orcamento;
use DomainException;

class Finalizado extends EstadoOrcamento
{
    public function calcularDescontoExtra(Orcamento $orcamento): float
    {
        throw new DomainException(
            'Um orçamento finalizado não pode receber um desconto'
        );
    }
}