<?php

namespace Model;

use PDO;

use PDOException;

class ConexaoDB
{
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "relatorio_km";

    public function conectarBanco()
    {
        try {
            return new PDO('mysql:dbname=' . $this->database . ';host=' . $this->servername . ';charset=UTF8', $this->username, $this->password);
        } catch (PDOException $e) {
            echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
        }
    }
}

// $pdo = new ConexaoDB();
// $pdo1 = $pdo->conectarBanco();
// if ($pdo1) {
//     echo 'conectado';
// }