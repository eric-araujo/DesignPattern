<?php

namespace DesignPatternComportamental\Descontos;

use DesignPatternComportamental\Orcamento;

abstract class Desconto
{
    protected Desconto $proximoDesconto;

    public function __construct(Desconto $proximoDesconto)
    {
        $this->proximoDesconto = $proximoDesconto;
    }

    abstract public function calcularDesconto(Orcamento $orcamento): float;
}