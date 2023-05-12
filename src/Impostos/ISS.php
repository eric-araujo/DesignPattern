<?php

namespace DesignPattern\Impostos;

use DesignPattern\Orcamento;

class ISS extends Imposto
{
    private const PORCENTAGEM_IMPOSTO = 0.06;

    public function realizarCalculoEspecifico(Orcamento $orcamento): float
    {
        return $orcamento->valor * self::PORCENTAGEM_IMPOSTO;
    }
}