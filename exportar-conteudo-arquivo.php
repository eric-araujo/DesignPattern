<?php

use DesignPattern\{Orcamento, Pedido};
use DesignPattern\Relatorio\{ArquivoXMLExportado, ArquivoZIPExportado, OrcamentoExportado, PedidoExportado};

require_once "vendor/autoload.php";

$pedido = new Pedido();
$pedido->nomeCliente = 'Eric Lima';
$pedido->dataFinalizacao = new DateTimeImmutable();

$orcamentoExportado = new PedidoExportado($pedido);
$orcamentoExportadoXml = new ArquivoZIPExportado('pedido.array');

echo $orcamentoExportadoXml->salvar($orcamentoExportado);