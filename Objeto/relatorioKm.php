<?php

namespace Objeto;


class RelatorioDeKm
{
    private $idKm;
    private $localUm;
    private $localDois;
    private $qtdKm;
    private $data;
    private $idUsuario;


    public function getIdKm()
    {
        return $this->idKm;
    }

    public function getLocalUm()
    {
        return $this->localUm;
    }

    public function getLocalDois()
    {
        return $this->localDois;
    }

    public function getQtdKm()
    {
        return $this->qtdKm;
    }

    public function getData()
    {
        return $this->data;
    }

    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    // Metodo set

    public function setIdKm($idKm)
    {
        $this->idKm = $idKm;
    }

    public function setLocalUm($localUm)
    {
        $this->localUm = $localUm;
    }

    public function setLocalDois($localDois)
    {
        $this->localDois = $localDois;
    }

    public function setQtdKm($qtdKm)
    {
        $this->qtdKm = $qtdKm;
    }

    public function setData($data)
    {
        $this->data = $data;
    }

    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;
    }
}
