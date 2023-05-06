<?php

namespace DesignPattern\RegistroOrcamento;

use DesignPattern\EstadoOrcamento\Finalizado;
use DesignPattern\Http\HTTPAdapterInterface;
use DesignPattern\Orcamento;
use DomainException;

class RegistroOrcamento
{
    private HTTPAdapterInterface $httpAdapterInterface;

    public function __construct(HTTPAdapterInterface $httpAdapterInterface)
    {
        $this->httpAdapterInterface = $httpAdapterInterface;
    }

    public function registrar(Orcamento $orcamento): void
    {
        if(!$orcamento->estadoOrcamento instanceof Finalizado) {
            throw new DomainException('Apenas orçamentos finalizados podem ser registrados!');
        }

        $this->httpAdapterInterface->post(
            'http://api.registrar.orcamento',
            [
                'valor' => $orcamento->valor,
                'quantidadeItens' => $orcamento->quantidadeItens
            ]
        );
    }
}
