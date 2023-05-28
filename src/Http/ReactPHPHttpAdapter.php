
<?php

namespace DesignPattern\Http;

class ReactPHPHttpAdapter implements HTTPAdapterInterface
{
    public function post(string $url, array $dados = []): void
    {
        //Faz alguma coisa legal aqui
        echo "Requisição com React PHP";
    }
}
