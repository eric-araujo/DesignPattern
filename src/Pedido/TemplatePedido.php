<?php

namespace DesignPattern\Pedido;

use DateTimeImmutable;

class TemplatePedido
{
    private string $nomeCliente;
    private DateTimeImmutable $dataFinalizacao;

    public function __construct(string $nomeCliente, DateTimeImmutable $dataFinalizacao)
    {
        $this->nomeCliente = $nomeCliente;
        $this->dataFinalizacao = $dataFinalizacao;
    }

    public function retornarNomeCliente(): string
    {
        return $this->nomeCliente;
    }

    public function retornarDataFinalizacao(): DateTimeImmutable
    {
        return $this->dataFinalizacao;
    }
}