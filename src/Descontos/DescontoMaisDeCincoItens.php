<?php

namespace DesignPatternComportamental\Descontos;

use DesignPatternComportamental\Orcamento;

class DescontoMaisDeCincoItens extends Desconto
{
    public function calcularDesconto(Orcamento $orcamento): float
    {
        if ($orcamento->quantidadeItens > 5) {
            return $orcamento->valor * 0.1;
        }

        return $this->proximoDesconto->calcularDesconto($orcamento);
    }
}
