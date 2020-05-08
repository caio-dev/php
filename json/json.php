<?php

// JSON = JavaScript Object Notation

$pessoas = array();

array_push($pessoas, array(
	'nome' => 'Caio',
	'idade' => '21'
));

array_push($pessoas, array(
	'nome' => 'Maria',
	'idade' => '30'
));

// Para tranformar ARRAY em JSON
echo json_encode($pessoas)."<br>";

echo "----------------------------------------------"."<br>";

$json = '[{"nome":"Caio","idade": "21"},{"nome": "Maria","idade": "30"}]';

// Para transformar JSON em ARRAY
$dados = json_decode($json, true);
// O true serve para tranformar em JSON, do contrario, se transforma em OBJETO 
print_r($dados);


?>