<?php

namespace DesignPattern\Relatorio;

class ArquivoXMLExportado implements ArquivoExportadoInterface
{
    private string $nomeElementoPai;

    public function __construct(string $nomeElementoPai)
    {
        $this->nomeElementoPai = $nomeElementoPai;
    }
    public function salvar(ConteudoExportadoInterface $conteudoExportadoInterface): string
    {
        $xmlElementoPai = "<{$this->nomeElementoPai}/>";
        $elementoXML = new \SimpleXMLElement($xmlElementoPai);

        foreach ($conteudoExportadoInterface->exportar() as $item => $valor) {
            $elementoXML->addChild($item, $valor);
        }

        $caminhoArquivoTemporario = tempnam(sys_get_temp_dir(), 'xml');
        $elementoXML->asXML($caminhoArquivoTemporario);

        return $caminhoArquivoTemporario;
    }
}
