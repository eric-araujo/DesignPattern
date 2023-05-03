<?php

namespace DesignPattern;

use DesignPattern\AcoesAoGerarPedido\AcaoAposGerarPedidoInterface;
use DesignPattern\AcoesAoGerarPedido\CriarPedidoNoBanco;
use DesignPattern\AcoesAoGerarPedido\EnviarPedidoPorEmail;
use DesignPattern\AcoesAoGerarPedido\LogGerarPedido;

class GerarPedidoHandler
{
    /** @var AcaoAposGerarPedidoInterface[] */
    private array $acoesAposGerarPedido = [];

    public function __construct(/* PedidoRepository, MailService */)
    {
    }

    public function adicionarAcaoAoGerarPedido(AcaoAposGerarPedidoInterface $acao): void
    {
        $this->acoesAposGerarPedido[] = $acao;
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

        foreach($this->acoesAposGerarPedido as $acao) {
            $acao->executaAcao($pedido);
        }

        return true;
    }
}
