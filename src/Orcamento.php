<?php

namespace DesignPatternComportamental;

use DesignPatternComportamental\EstadoOrcamento\EmAprovacao;
use DesignPatternComportamental\EstadoOrcamento\EstadoOrcamento;
use DomainException;

class Orcamento
{
    public int $quantidadeItens;
    public float $valor;
    public EstadoOrcamento $estadoOrcamento;

    public function __construct()
    {
        $this->estadoOrcamento = new EmAprovacao();
    }

    public function aplicarDescontoExtra(): void
    {
        $this->valor -= $this->estadoOrcamento->calcularDescontoExtra($this);
    }

    public function aprovar(): void
    {
        $this->estadoOrcamento->aprovar($this);
    }

    public function reprovar(): void
    {
        $this->estadoOrcamento->reprovar($this);
    }

    public function finalizar(): void
    {
        $this->estadoOrcamento->finalizar($this);
    }
}
