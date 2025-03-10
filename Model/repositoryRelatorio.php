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

        if (isset($_SESSION['idUsuario'])) {
            $idUsuario = $_SESSION['idUsuario'];
        } else {

            die('Usuário não autenticado ou sessão expirada.');
        }

        $localUm = $dadosFormulario->getLocalUm();
        $localDois = $dadosFormulario->getLocalDois();
        $qtdKm = $dadosFormulario->getQtdKm();
        $data = $dadosFormulario->getData();



        $sql = "INSERT INTO km (localUm, localDois, qtdKm, data, idUsuario) 
                      VALUES 
             (:localUm, :localDois, :qtdKm, :data, :idUsuario)";
        //  var_dump($sql);
        //  die;
        $stmt = $this->con->prepare($sql);

        $stmt->bindParam(":localUm", $localUm);
        $stmt->bindParam(":localDois", $localDois);
        $stmt->bindParam(":qtdKm", $qtdKm);
        $stmt->bindParam(":data", $data);
        $stmt->bindParam(":idUsuario", $idUsuario);

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

    public function buscarRelatorio($data)
    {
        $dataInicio = $data->getData();
        $idUsuario = $data->getIdUsuario();

        // $sql = "SELECT *
        // FROM km 
        // WHERE deleted_at IS NULL 
        //     AND (:data IS NULL OR data = :data)
        // ORDER BY data DESC";

        $sql = "SELECT u.idUsuario, k.localUm, k.localDois, k.qtdKm, k.data
        FROM km k
        INNER JOIN usuarios u ON k.idUsuario = u.idUsuario
        WHERE u.idUsuario = :idUsuario
        AND k.deleted_at IS NULL
        AND (:data IS NULL OR k.data = :data)
        ORDER BY k.data DESC";

        $stmt = $this->con->prepare($sql);

        $stmt->bindParam(":data", $dataInicio);
        $stmt->bindParam(":idUsuario", $idUsuario);

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
