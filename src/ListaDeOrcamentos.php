<?php

namespace DesignPattern;

use DesignPattern\EstadoOrcamento\Finalizado;
use Traversable;

class ListaDeOrcamentos implements \IteratorAggregate
{
    /** @var Orcamento[] */
    private array $orcamentos;

    public function __construct()
    {
        $this->orcamentos = [];
    }

    public function getIterator(): Traversable
    {
        return new \ArrayIterator($this->orcamentos);
    }

    public function adicionar(Orcamento $orcamento): void
    {
        $this->orcamentos[] = $orcamento;
    }

    public function buscarOrcamentosFinalizados(): void
    {
        $this->orcamentos = array_filter(
            $this->orcamentos,
            function (Orcamento $orcamento) {
                return $orcamento->estadoOrcamento instanceof Finalizado;
            }
        );
    }
}