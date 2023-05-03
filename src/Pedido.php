<?php

namespace DesignPattern;

use DateTimeImmutable;

class Pedido
{
    public string $nomeCliente;
    public DateTimeImmutable $dataFinalizacao;
    public Orcamento $orcamento;
}