<?php
namespace Service;

require_once '../Objeto/RelatorioKm.php';
require_once '../Model/repositoryRelatorio.php';


use Model\RelatorioRepository;
use Objeto\RelatorioDeKm;

class Fachada 
{
    public function inserirRelatorio($dado)
    {
        $relatorio = new RelatorioDeKm();

        $relatorio->setLocalUm($dado['localUm']);
        $relatorio->setLocalDois($dado['localDois']);
        $relatorio->setQtdKm($dado['qtdKm']);
        $relatorio->setData($dado['data']);

        $repository = new RelatorioRepository();
        return $repository->inserirRelatorio($dado);


        
    }

} 

$dado = [
    'localUm' => 'Local A',
    'localDois' => 'Local B',
    'qtdKm' => 120,
    'data' => '2025-01-09',
];

$obj = new Fachada();

$obf = $obj->inserirRelatorio($dado);

print_r($obf);