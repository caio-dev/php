<?php

$data = [
	"nome"=>"Caio"
];

define('SECRET', pack('a16', 'senha'));
// A função pack vai converter uma string em 16 bits

$mcrypt = mcrypt_encrypt(
	MCRYPT_RIJNDAEL_128,
	// Algoritmo que vai ser usado
	SECRET,
	// Senha (Constante que foi passada la em cima)
	json_encode($data),
	// String que será encriptada
	MCRYPT_MODE_ECB
	// Modo de criptografia
);

$resultado = base64_encode($mcrypt);
// o base 64 é usado para tornar os caracteres visiveis, do contrario, a informação seria perdida
var_dump($resultado);

// DECREIPTOGRAFAR
$string = mcrypt_decrypt(
	MCRYPT_RIJNDAEL_128,
	// Mesmo padrão de criptografia
	SECRET,
	base64_decode($resultado),
	MCRYPT_MODE_ECB
);


var_dump (json_decode($string, true));



?>