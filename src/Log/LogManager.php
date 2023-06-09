<?php

namespace DesignPattern\Log;

abstract class LogManager
{
    public function montarLog(string $severidade, string $mensagem): void
    {
        /**@var LogWritterInterface $logWritter */

        $logWritter = $this->criarLogWritter();

        $dataHoje = date('d/m/Y');
        $mensagemFormatada = "[$dataHoje][$severidade]: $mensagem";

        $logWritter->escrever($mensagemFormatada);
    }

    abstract public function criarLogWritter(): LogWritterInterface;
}
