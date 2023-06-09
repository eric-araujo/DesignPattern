<?php

namespace DesignPattern\Venda;

use DesignPattern\Impostos\ICMS;
use DesignPattern\Impostos\Imposto;

class VendaProdutoFactory
{
    private int $pesoProduto;

    public function __construct(int $pesoProduto)
    {
        $this->pesoProduto = $pesoProduto;
    }

    public function criarVenda(): Venda
    {
        return new VendaProduto(new \DateTimeImmutable(), $this->pesoProduto);
    }

    public function retornarImposto(): Imposto
    {
        return new ICMS();
    }
}
