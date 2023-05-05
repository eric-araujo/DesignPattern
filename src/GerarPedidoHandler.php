<?php

namespace DesignPatternComportamental;

use DesignPatternComportamental\AcoesAoGerarPedido\AcaoAposGerarPedidoInterface;
use DesignPatternComportamental\AcoesAoGerarPedido\CriarPedidoNoBanco;
use DesignPatternComportamental\AcoesAoGerarPedido\EnviarPedidoPorEmail;
use DesignPatternComportamental\AcoesAoGerarPedido\LogGerarPedido;

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
