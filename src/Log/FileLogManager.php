<?php

namespace DesignPattern\Log;

class FileLogManager extends LogManager
{
    private string $caminhoArquivo;

    public function __construct(string $caminhoArquivo)
    {
        $this->caminhoArquivo = $caminhoArquivo;
    }

    public function criarLogWritter(): LogWritterInterface
    {
        return new FileLogWritter($this->caminhoArquivo);
    }
}
