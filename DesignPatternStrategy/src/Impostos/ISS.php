<?php

namespace DesignPatternStrategy\Impostos;

use DesignPatternStrategy\Orcamento;

class ISS implements ImpostoInterface
{
    private const PORCENTAGEM_IMPOSTO = 0.06;

    public function calcularImposto(Orcamento $orcamento): float
    {
        return $orcamento->valor * self::PORCENTAGEM_IMPOSTO;
    }
}