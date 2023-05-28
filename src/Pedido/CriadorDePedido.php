<?php

namespace DesignPattern\Pedido;

use DesignPattern\Orcamento;

class CriadorDePedido
{
    private array $templatesPedido = [];

    public function criar(string $nomeCliente, string $dataFormatada, Orcamento $orcamento)
    {
        $templatePedido = $this->gerarTemplatePedido($nomeCliente, $dataFormatada);
        var_dump($templatePedido);
        $pedido = new Pedido();
        $pedido->templatePedido = $templatePedido;
        $pedido->orcamento = $orcamento;

        return $pedido;
    }

    private function gerarTemplatePedido(string $nomeCliente, string $dataFormatada): TemplatePedido
    {
        $hash = md5($nomeCliente . $dataFormatada);

        if(!array_key_exists($hash, $this->templatesPedido)) {
            $templatePedido = new TemplatePedido(
                $nomeCliente,
                new \DateTimeImmutable($dataFormatada)
            );

            $this->templatesPedido[$hash] = $templatePedido;
        }

        return $this->templatesPedido[$hash];
    }
}
