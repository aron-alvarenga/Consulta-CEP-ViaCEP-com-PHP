<?php

require __DIR__ . '/vendor/autoload.php';

// Dependencias
use \App\WebService\ViaCEP;

// Verifica a existencia do CEP no comando
if (!isset($argv[1])) {
  die("ERRO: CEP não definido.\n");
}

// Executa a consulta de CEP
$dadosCEP = ViaCEP::consultarCEP($argv[1]);

print_r($dadosCEP);
