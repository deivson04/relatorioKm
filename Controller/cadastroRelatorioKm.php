<?php

namespace Controller;

require_once '../Service/fachada.php';



use Service\Fachada;

class CadastroRelatorioKm 
{
    public function inserirRelatorio()
    {
        
        // Verificando se o formulário foi enviado via POST
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Pegando os dados do formulário via POST
            $dado = [
                'data' => $_POST['data'] ?? '',
                'localUm' => $_POST['localUm'] ?? '',
                'localDois' => $_POST['localDois'] ?? '',
                'qtdKm' => $_POST['qtdKm'] ?? ''
            ];
            
            // echo 'Chegou: ';
            //print_r($dado); // Usando print_r para exibir o conteúdo do array
        }
           
        
        
        
        
        
        $objetoRelatorio = new Fachada();
        return $objetoRelatorio->inserirRelatorio($dado);
        }
        
    }

    


// $f = new CadastroRelatorioKm();

// $e = $f->inserirRelatorio();





