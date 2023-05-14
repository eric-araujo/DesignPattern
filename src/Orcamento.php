<?php

namespace DesignPattern;

use DesignPattern\EstadoOrcamento\EmAprovacao;
use DesignPattern\EstadoOrcamento\EstadoOrcamento;

class Orcamento implements OrcavelInterface
{
    private array $itens;
    public EstadoOrcamento $estadoOrcamento;

    public function __construct()
    {
        $this->estadoOrcamento = new EmAprovacao();
        $this->itens = [];
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

    public function adicionarItem(OrcavelInterface $item): void
    {
        $this->itens[] = $item;
    }

    public function retornarValor(): float
    {
        return array_reduce(
            $this->itens,
            fn (float $valorAcumulado, OrcavelInterface $itemOrcamento) => $itemOrcamento->retornarValor() + $valorAcumulado,
            0
        );
    }
}
