<?php

namespace DesignPatternComportamental\Impostos;

use DesignPatternComportamental\Orcamento;

class ICMS implements ImpostoInterface
{
    private const PORCENTAGEM_IMPOSTO = 0.1;

    public function calcularImposto(Orcamento $orcamento): float
    {
        return $orcamento->valor * self::PORCENTAGEM_IMPOSTO;
    }
}