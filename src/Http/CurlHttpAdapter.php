<?php

namespace DesignPattern\Http;

class CurlHttpAdapter implements HTTPAdapterInterface
{
    public function post(string $url, array $dados = []): void
    {
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_POST, $dados);

        curl_exec($curl);
    }
}