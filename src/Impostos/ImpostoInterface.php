<?php

namespace DesignPattern\Impostos;

use DesignPattern\Orcamento;

interface ImpostoInterface
{
    public function calcularImposto(Orcamento $orcamento): float;
}