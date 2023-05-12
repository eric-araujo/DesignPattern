<?php

namespace DesignPattern;

use DesignPattern\Impostos\Imposto;

class CalculadoraDeImpostos
{
    public function calcular(Orcamento $orcamento, Imposto $imposto): float
    {
        return $imposto->calcularImposto($orcamento);
    }
}