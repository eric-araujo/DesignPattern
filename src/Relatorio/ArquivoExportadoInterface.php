<?php

namespace DesignPattern\Relatorio;

interface ArquivoExportadoInterface
{
    public function salvar(ConteudoExportadoInterface $conteudoExportadoInterface): string;
}