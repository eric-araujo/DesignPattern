<?php

namespace DesignPatternComportamental\Impostos;

use DesignPatternComportamental\Orcamento;

class IKCV extends ImpostoComDuasAliquotas
{
    protected function verificarSeDeveAplicarTaxaMaxima(Orcamento $orcamento): bool
    {
        return $orcamento->valor > 300 && $orcamento->quantidadeItens > 3;
    }

    protected function calcularTaxaMaxima(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.04;
    }

    protected function calcularTaxaMinima(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.025;
    }
}