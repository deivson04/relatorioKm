<?php

namespace Controller;

require_once '../Service/fachada.php';

use Service\Fachada;

class RelatorioController
{
    private $fachada;

    public function __construct()
    {
        $this->fachada = new Fachada();
    }

    public function buscarRelatorio()
    {
        return $this->fachada->buscarRelatorio();
    }

    public function buscarId($dadosFormulario)
    {
        return $this->fachada->buscarId($dadosFormulario);
    }
}
