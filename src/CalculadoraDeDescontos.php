<?php

namespace DesignPatternComportamental;

use DesignPatternComportamental\Descontos\DescontoMaisDe500Reais;
use DesignPatternComportamental\Descontos\DescontoMaisDeCincoItens;
use DesignPatternComportamental\Descontos\SemDesconto;

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
