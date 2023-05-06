<?php

namespace DesignPattern\EstadoOrcamento;

use DesignPattern\Orcamento;
use DomainException;

abstract class EstadoOrcamento
{
    /**
     * @throws \DomainException
     */
    abstract public function calcularDescontoExtra(Orcamento $orcamento): float;

    public function aprovar(Orcamento $orcamento): void
    {
        throw new DomainException(
            'Este orçamento não pode ser aprovado'
        );
    }

    public function reprovar(Orcamento $orcamento): void
    {
        throw new DomainException(
            'Este orçamento não pode ser reprovado'
        );
    }

    public function finalizar(Orcamento $orcamento): void
    {
        throw new DomainException(
            'Este orçamento não pode ser finalizado'
        );
    }
}