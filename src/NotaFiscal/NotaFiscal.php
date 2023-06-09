<?php

namespace DesignPattern\NotaFiscal;

use DesignPattern\ItemOrcamento;

class NotaFiscal
{
    public string $cnpjEmpresa;
    public string $razaoSocialEmpresa;
    public array $itens;
    public string $observacoes;
    public \DateTimeImmutable $dataEmissao;
    public float $valorImpostos;

    public function retornarValor(): float
    {
        return array_reduce($this->itens, function (float $valorAcumulado, ItemOrcamento $itemAtual) {
            return $valorAcumulado + $itemAtual->retornarValor();
        }, 0);
    }
}
