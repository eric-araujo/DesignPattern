<?php

namespace DesignPattern\NotaFiscal;

use DesignPattern\ItemOrcamento;

abstract class ConstrutorNotaFiscal
{
    protected NotaFiscal $notaFiscal;

    public function __construct()
    {
        $this->notaFiscal = new NotaFiscal();
        $this->notaFiscal->dataEmissao = new \DateTimeImmutable();
    }

    public function definirEmpresa(string $cnpj, string $razaoSocial): ConstrutorNotaFiscal
    {
        $this->notaFiscal->cnpjEmpresa = $cnpj;
        $this->notaFiscal->razaoSocialEmpresa = $razaoSocial;

        return $this;
    }

    public function adicionarItem(ItemOrcamento $item): ConstrutorNotaFiscal
    {
        $this->notaFiscal->itens[] = $item;

        return $this;
    }

    public function definirObservacoes(string $observacoes): ConstrutorNotaFiscal
    {
        $this->notaFiscal->observacoes = $observacoes;

        return $this;
    }

    public function definirDataEmissao(\DateTimeImmutable $dataEmissao): ConstrutorNotaFiscal
    {
        $this->notaFiscal->dataEmissao = $dataEmissao;

        return $this;
    }

    abstract public function construir(): NotaFiscal;
}