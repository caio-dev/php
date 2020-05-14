<?php

define('SECRET_IV', pack('a16', 'senha'));
define('SECRET', pack('a16', 'senha'));
// A função pack vai converter uma string em 16 bits

$data = [
	"nome"=>"Caio"
];

$openssl = openssl_encrypt(
	json_encode($data),
	'AES-128-CBC', 
	// Forma de criptografia
	SECRET,
	// Chave
	0,
	// Forma de retorno - documentação
	SECRET_IV
	// Segunda chave
);

echo($openssl)."<br>";

$string = openssl_decrypt($openssl, 
	'AES-128-CBC', 
	SECRET, 
	0, 
	SECRET_IV);

var_dump(json_decode($string, true));




?>