<?php

namespace App\WebService;

class ViaCEP
{

  /**
   * Metodo responsavel por consultar um CEP no ViaCEP
   * @param string $cep
   * @return array
   */
  public static function consultarCEP($cep)
  {
    // Iniciar o CURL
    $curl = curl_init();

    // Configuracoes do CURL
    curl_setopt_array($curl, [
      CURLOPT_URL => 'https://viacep.com.br/ws/' . $cep . '/json/',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_CUSTOMREQUEST => 'GET'
    ]);

    // Response
    $response = curl_exec($curl);

    // Fecha a conexao aberta
    curl_close($curl);

    // Converte o Json para Array
    $array = json_decode($response, true);

    // Retorna o conteudo em Array
    return isset($array['cep']) ? $array : null;
  }
}
