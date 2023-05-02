<?php

namespace DesignPatternStrategy\Impostos;

use DesignPatternStrategy\Orcamento;

interface ImpostoInterface
{
    public function calcularImposto(Orcamento $orcamento): float;
}