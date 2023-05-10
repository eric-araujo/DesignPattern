<?php

namespace DesignPattern\Relatorio;

use DesignPattern\Orcamento;

class OrcamentoExportado implements ConteudoExportadoInterface
{
    private Orcamento $orcamento;

    public function __construct(Orcamento $orcamento)
    {
        $this->orcamento = $orcamento;
    }

    public function exportar(): array
    {
        return [
            'valor' => $this->orcamento->valor,
            'quantidade_itens' => $this->orcamento->quantidadeItens
        ];
    }
}
