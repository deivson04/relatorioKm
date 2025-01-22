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

    public function buscarRelatorio()
    {
        $sql = "Select
                 *
                FROM km 
                WHERE deleted_at is null";

        $stmt = $this->con->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
