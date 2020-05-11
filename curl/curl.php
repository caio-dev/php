<?php

$cep = "53415410";
$link = "https://viacep.com.br/ws/$cep/json/";

$ch = curl_init($link);


curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// O primeiro parametro se refere a biblioteca que iniciamos anteriormente
// CURLOPT_RETURNTRANSFER é uma constante que informa que espero um retorno

curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
// Não precisa validar se tem certificado https

$response = curl_exec($ch);

curl_close($ch);

$data = json_decode($response, true);

print_r($data);

?>