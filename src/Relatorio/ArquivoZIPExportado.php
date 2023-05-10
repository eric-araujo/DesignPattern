<?php

namespace DesignPattern\Relatorio;

class ArquivoZIPExportado implements ArquivoExportadoInterface
{
    private string $nomeArquivoInterno;

    public function __construct(string $nomeArquivoInterno)
    {
        $this->nomeArquivoInterno = $nomeArquivoInterno;
    }

    public function salvar(ConteudoExportadoInterface $conteudoExportadoInterface): string
    {
        $caminhoArquivoTemporario = tempnam(sys_get_temp_dir(), 'zip');

        $arquivoZIP = new \ZipArchive();
        $arquivoZIP->open($caminhoArquivoTemporario);

        $conteudoSerializado = serialize($conteudoExportadoInterface->exportar());
        $arquivoZIP->addFromString($this->nomeArquivoInterno, $conteudoSerializado);
        $arquivoZIP->close();

        return $caminhoArquivoTemporario;
    }
}
