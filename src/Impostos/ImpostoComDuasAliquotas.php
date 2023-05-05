<?php

namespace DesignPatternComportamental\Impostos;

use DesignPatternComportamental\Orcamento;

abstract class ImpostoComDuasAliquotas implements ImpostoInterface
{
    public function calcularImposto(Orcamento $orcamento): float
    {
        if($this->verificarSeDeveAplicarTaxaMaxima($orcamento)) {
            return $this->calcularTaxaMaxima($orcamento);
        }

        return $this->calcularTaxaMinima($orcamento);
    }

    abstract protected function verificarSeDeveAplicarTaxaMaxima(Orcamento $orcamento): bool;
    abstract protected function calcularTaxaMaxima(Orcamento $orcamento): float;
    abstract protected function calcularTaxaMinima(Orcamento $orcamento): float;
}