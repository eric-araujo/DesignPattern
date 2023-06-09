<?php

namespace DesignPattern\Venda;

class VendaProduto extends Venda
{
    private string $pesoProduto;

    public function __construct(\DateTimeImmutable $dataRealizacao, int $pesoProduto)
    {
        parent::__construct($dataRealizacao);

        $this->pesoProduto = $pesoProduto;
    }
}