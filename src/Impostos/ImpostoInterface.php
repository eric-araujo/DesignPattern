<?php

namespace DesignPatternComportamental\Impostos;

use DesignPatternComportamental\Orcamento;

interface ImpostoInterface
{
    public function calcularImposto(Orcamento $orcamento): float;
}