<?php

namespace DesignPattern\Log;

class StdoutLogWritter implements LogWritterInterface
{
    public function escrever(string $mensagemFormatada): void
    {
        echo $mensagemFormatada;
    }
}