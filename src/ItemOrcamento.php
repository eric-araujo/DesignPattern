<?php

namespace DesignPattern;

class ItemOrcamento implements OrcavelInterface
{
    private float $valor;

    public function definirValor(float $valor): void
    {
        $this->valor = $valor;
    }

    public function retornarValor(): float
    {
        return $this->valor;
    }
}