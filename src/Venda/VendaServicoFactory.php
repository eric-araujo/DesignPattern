<?php

namespace DesignPattern\Venda;

use DesignPattern\Impostos\Imposto;
use DesignPattern\Impostos\ISS;

class VendaServicoFactory
{
    private string $nomePrestador;

    public function __construct(string $nomePrestador)
    {
        $this->nomePrestador = $nomePrestador;
    }

    public function criarVenda(): Venda
    {
        return new VendaServico(new \DateTimeImmutable(), $this->nomePrestador);
    }

    public function retornarImposto(): Imposto
    {
        return new ISS();
    }
}
