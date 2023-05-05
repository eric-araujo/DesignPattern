<?php

namespace DesignPatternComportamental;

class GerarPedido
{
    private float $valorOrcamento;
    private int $numeroItens;
    private string $nomeCliente;

    public function __construct(float $valorOrcamento, int $numeroItens, string $nomeCliente)
    {
        $this->valorOrcamento = $valorOrcamento;
        $this->numeroItens = $numeroItens;
        $this->nomeCliente = $nomeCliente;
    }

    public function pegarValorOrcamento(): float
    {
        return $this->valorOrcamento;
    }

    public function pegarNumeroItens(): int
    {
        return $this->numeroItens;
    }

    public function pegarNomeCliente(): string
    {
        return $this->nomeCliente;
    }
}
