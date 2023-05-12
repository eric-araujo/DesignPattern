<?php

namespace DesignPattern\Impostos;

use DesignPattern\Orcamento;

abstract class ImpostoComDuasAliquotas extends Imposto
{
    public function realizarCalculoEspecifico(Orcamento $orcamento): float
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