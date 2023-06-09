<?php

namespace DesignPattern\NotaFiscal;

class ConstrutorNotaFiscalProduto extends ConstrutorNotaFiscal
{
    public function construir(): NotaFiscal
    {
        $valorNotaFiscal = $this->notaFiscal->retornarValor();
        $this->notaFiscal->valorImpostos = $valorNotaFiscal * 0.02;
        
        return $this->notaFiscal;
    }
}