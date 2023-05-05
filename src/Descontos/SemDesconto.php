<?php

namespace DesignPatternComportamental\Descontos;

use DesignPatternComportamental\Orcamento;

class SemDesconto extends Desconto
{
    public function __construct()
    {
    }

    public function calcularDesconto(Orcamento $orcamento): float
    {
        return 0;
    }
}
