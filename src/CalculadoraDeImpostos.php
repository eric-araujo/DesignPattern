<?php

namespace DesignPatternComportamental;

use DesignPatternComportamental\Impostos\ImpostoInterface;

class CalculadoraDeImpostos
{
    public function calcular(Orcamento $orcamento, ImpostoInterface $impostoInterface): float
    {
        return $impostoInterface->calcularImposto($orcamento);
    }
}