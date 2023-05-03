<?php

namespace DesignPattern;

class GerarPedidoHandler
{
    public function __construct(/* PedidoRepository, MailService */)
    {
        
    }

    public function executar(GerarPedido $gerarPedido)
    {
        $orcamento = new Orcamento();
        $orcamento->quantidadeItens = $gerarPedido->pegarNumeroItens();
        $orcamento->valor = $gerarPedido->pegarValorOrcamento();

        $pedido = new Pedido();
        $pedido->dataFinalizacao = new \DateTimeImmutable();
        $pedido->nomeCliente = $gerarPedido->pegarNomeCliente();
        $pedido->orcamento = $orcamento;

        //Executa PedidoRepository
        echo "Salvo no banco de dados com sucesso!" . PHP_EOL;
        //Executa MailService
        echo "E-mail enviado com sucesso!" . PHP_EOL;
        //Executa LogRepository
        echo "Log salvo com sucesso!" . PHP_EOL;

        return true;
    }
}