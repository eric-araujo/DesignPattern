<?php

namespace DesignPattern\Impostos;

use DesignPattern\Orcamento;

class ICMS extends Imposto
{
    private const PORCENTAGEM_IMPOSTO = 0.1;

    public function realizarCalculoEspecifico(Orcamento $orcamento): float
    {
        return $orcamento->valor * self::PORCENTAGEM_IMPOSTO;
    }
}