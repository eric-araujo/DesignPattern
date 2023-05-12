<?php

namespace DesignPattern\Impostos;

use DesignPattern\Orcamento;

abstract class Imposto
{
    private ?Imposto $outroImposto;

    public function __construct(Imposto $outroImposto = null)
    {
        $this->outroImposto = $outroImposto;
    }

    abstract protected function realizarCalculoEspecifico(Orcamento $orcamento): float;

    public function calcularImposto(Orcamento $orcamento): float
    {
        return $this->realizarCalculoEspecifico($orcamento) + $this->realizarCalculoOutroImposto($orcamento);
    }

    public function realizarCalculoOutroImposto(Orcamento $orcamento): float
    {
        return $this->outroImposto === null ? 0 : $this->outroImposto->calcularImposto($orcamento);
    }
}