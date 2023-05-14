<?php

namespace DesignPattern;

use DomainException;

class CacheOrcamentoProxy extends Orcamento
{
    private float $valorCache = 0;
    private Orcamento $orcamento;

    public function __construct(Orcamento $orcamento)
    {
        $this->orcamento = $orcamento;
    }

    public function adicionarItem(OrcavelInterface $item): void
    {
        throw new DomainException(
            'Não é possível adicionar item a orçamento em cachê'
        );
    }

    public function retornarValor(): float
    {
        if ($this->valorCache == 0) {
            $this->valorCache = $this->orcamento->retornarValor();
        }

        return $this->valorCache;
    }
}
