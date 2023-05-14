<?php

namespace DesignPattern;

use DesignPattern\Descontos\DescontoMaisDe500Reais;
use DesignPattern\Descontos\DescontoMaisDeCincoItens;
use DesignPattern\Descontos\LogDesconto;
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

        $descontoCalculado = $cadeiaDeDescontos->calcularDesconto($orcamento);
        $logDesconto = new LogDesconto();
        $logDesconto->informar($descontoCalculado);

        return $descontoCalculado;
    }
}
