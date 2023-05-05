<?php

namespace DesignPatternComportamental\Descontos;

use DesignPatternComportamental\Orcamento;

class DescontoMaisDe500Reais extends Desconto
{
    public function calcularDesconto(Orcamento $orcamento): float
    {
        if ($orcamento->valor > 500) {
            return $orcamento->valor * 0.05;
        }

        return $this->proximoDesconto->calcularDesconto($orcamento);
    }
}
