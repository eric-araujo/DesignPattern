<?php

namespace DesignPattern\Log;

interface LogWritterInterface
{
    public function escrever(string $mensagemFormatada): void;
}