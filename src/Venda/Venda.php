<?php

namespace DesignPattern\Venda;

abstract class Venda
{
    public \DateTimeImmutable $dataRealizacao;

    public function __construct(\DateTimeImmutable $dataRealizacao)
    {
        $this->dataRealizacao = $dataRealizacao;
    }
}