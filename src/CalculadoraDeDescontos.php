<?php

namespace DesignPattern;

use DesignPattern\Descontos\DescontoMaisDe500Reais;
use DesignPattern\Descontos\DescontoMaisDeCincoItens;
use DesignPattern\Descontos\SemDesconto;

class CalculadoraDeDescontos
{
    public function calcularDescontos(Orcamento $orcamento): float
    {
        $cadeiaDeDescontos = new DescontoMaisDeCincoItens(
            new DescontoMaisDe500Reais(
                new SemDesconto()
            )
        );

        return $cadeiaDeDescontos->calcularDesconto($orcamento);
    }
}
