<?php

function mensagem($texto) {

	return  "Olá, $texto";
}


echo mensagem("Caio Cesar!")."<br>";

/*
$texto = "Pão doce";
echo mensagem($texto);
*/

echo "-----------------------------------------------"."<br>";

function pessoa(){

	$argumentos = func_get_args();

	return $argumentos;

}

var_dump(pessoa("Olá Caio!", "21", 41));



?>