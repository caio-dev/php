<?php

$a = 10;

// Quando eu coloco "&" no parametro, as variaveis fora do escopo da função são alteradas
function valor($b){
	
	$b = 50;

	return $b;
}


echo valor($a);
echo "<br>";
echo $a;



?>