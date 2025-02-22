<?php

namespace Service;

require_once '../Objeto/RelatorioKm.php';
require_once '../Model/repositoryRelatorio.php';
require_once '../Model/repositoryUsuario.php';


use Model\RelatorioRepository;
use Objeto\RelatorioDeKm;
use Model\UsuarioRepository;


class Fachada
{
    public function inserirRelatorio($dadosFormulario)
    {
        $dadosFormulario = new RelatorioDeKm();

        $dadosFormulario->setLocalUm($_POST['localUm']);
        $dadosFormulario->setLocalDois($_POST['localDois']);
        $dadosFormulario->setQtdKm($_POST['qtdKm']);
        $dadosFormulario->setData($_POST['data']);

        $repository = new RelatorioRepository();
        return $repository->inserirRelatorio($dadosFormulario);
    }

    public function atualizarRelatorio($dadosFormulario)
    {
        $dadosFormulario = new RelatorioDeKm();

        $dadosFormulario->setIdKm($_POST['idKm']);
        $dadosFormulario->setLocalUm($_POST['localUm']);
        $dadosFormulario->setLocalDois($_POST['localDois']);
        $dadosFormulario->setQtdKm($_POST['qtdKm']);
        $dadosFormulario->setData($_POST['data']);

        $repository = new RelatorioRepository();
        return $repository->atualizarRelatorio($dadosFormulario);
    }

    public function buscarRelatorio($data)
    {
        $repository = new RelatorioRepository();
        return $repository->buscarRelatorio($data);
    }

    public function buscarId($dadosFormulario)
    {

        $repository = new RelatorioRepository();
        return $repository->buscarId($dadosFormulario);
    }

    public function deleteRelatorio($dadosFormulario)
    {

        $repository = new RelatorioRepository();
        return $repository->deleteRelatorio($dadosFormulario);
    }

    //Usuario

    public function inserirUsuario($usuario)
    {
        $repository = new UsuarioRepository();
        return $repository->inserirUsuario($usuario);
    }
}
