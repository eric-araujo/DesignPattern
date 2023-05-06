<?php

namespace DesignPattern\Http;

interface HTTPAdapterInterface
{
    public function post(string $url, array $dados = array()): void;
}