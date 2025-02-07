<?php

namespace Model;

require_once 'conexao.php';

use Model\ConexaoDB;

use PDO;


class RelatorioRepository
{
    protected $con;

    public function __construct()
    {
        $db = new ConexaoDB();

        $this->con = $db->conectarBanco();
    }

    public function inserirRelatorio($dadosFormulario)
    {

        $localUm = $dadosFormulario->getLocalUm();
        $localDois = $dadosFormulario->getLocalDois();
        $qtdKm = $dadosFormulario->getQtdKm();
        $data = $dadosFormulario->getData();

        $sql = "INSERT INTO km (localUm, localDois, qtdKm, data) 
                      VALUES 
             (:localUm, :localDois, :qtdKm, :data)";

        $stmt = $this->con->prepare($sql);

        $stmt->bindParam(":localUm", $localUm);
        $stmt->bindParam(":localDois", $localDois);
        $stmt->bindParam(":qtdKm", $qtdKm);
        $stmt->bindParam(":data", $data);

        $stmt->execute();

        return $stmt;
    }

    public function atualizarRelatorio($dadosFormulario)
    {
        $idKm = $dadosFormulario->getIdKm();
        $localUm = $dadosFormulario->getLocalUm();
        $localDois = $dadosFormulario->getLocalDois();
        $qtdKm = $dadosFormulario->getQtdKm();
        $data = $dadosFormulario->getData();

        $sql = "UPDATE km
                SET localUm = :localUm, localDois = :localDois, qtdKm = :qtdKm, data = :data
                WHERE idKm = :idKm";

        $stmt = $this->con->prepare($sql);

        $stmt->bindParam(":localUm", $localUm);
        $stmt->bindParam(":localDois", $localDois);
        $stmt->bindParam(":qtdKm", $qtdKm);
        $stmt->bindParam(":data", $data);
        $stmt->bindParam(":idKm", $idKm);

        $stmt->execute();

        return $stmt;
    }

    public function buscarId($dadosFormulario)
    {

        $idKm = $dadosFormulario->getIdKm();


        $sql = "SELECT
                  *  
                FROM km
                WHERE idKm = :idKm";

        $stmt = $this->con->prepare($sql);

        $stmt->bindParam(":idKm", $idKm);

        $stmt->execute();


        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function buscarRelatorio()
    {
        $sql = "SELECT
                 *
                FROM km 
                WHERE deleted_at is null";

        $stmt = $this->con->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function dataInicio($data)
    {
        $dataInicio = $data->getData();


        $sql = "SELECT
                 *
                FROM km 
                WHERE deleted_at is null AND data = :data";
       
        $stmt = $this->con->prepare($sql);

        $stmt->bindParam(":data", $dataInicio);
        
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function deleteRelatorio($dadosFormulario)
    {
        $idKm = $dadosFormulario->getIdKm();

        date_default_timezone_set('America/Recife');
        $date = date("Y-m-d H:i:s");

        $sql = "UPDATE km
                SET  deleted_at = :deleted_at
                WHERE idKm = :idKm";
        $stmt = $this->con->prepare($sql);

        $stmt->bindParam(":idKm", $idKm);
        $stmt->bindParam(":deleted_at", $date);

        $stmt->execute();

        return $stmt;
    }
}
