<?php

namespace DesignPattern\Descontos;

class LogDesconto
{
    public function informar(float $descontoCalculado): void
    {
        //bliblioteca de log

        echo "Salvando log de desconto: {$descontoCalculado}" . PHP_EOL;
    }
}