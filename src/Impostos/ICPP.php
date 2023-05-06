<?php

namespace DesignPattern\Impostos;

use DesignPattern\Orcamento;

class ICPP extends ImpostoComDuasAliquotas
{
    protected function verificarSeDeveAplicarTaxaMaxima(Orcamento $orcamento): bool
    {
        return $orcamento->valor > 500;
    }

    protected function calcularTaxaMaxima(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.03;
    }

    protected function calcularTaxaMinima(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.02;
    }
}