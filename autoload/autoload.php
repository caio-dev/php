<?php

function __autoload($nomeClasse){

	// A função autoload vai importar as classes que estiverem sendo chamadas neste arquivo
	// var_dump($nomeClasse);
	require_once("$nomeClasse.php");
}

//require_once("DelRey.php");

$carro = new DelRey();
$carro->acelerar(175);


















?>