<?php

namespace DesignPattern\NotaFiscal;

class ConstrutorNotaFiscalServico extends ConstrutorNotaFiscal
{
    public function construir(): NotaFiscal
    {
        $valorNotaFiscal = $this->notaFiscal->retornarValor();
        $this->notaFiscal->valorImpostos = $valorNotaFiscal * 0.06;
        
        return $this->notaFiscal;
    }
}