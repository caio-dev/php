<?php

// Convertendo o retorno
function soma(int ...$valores):string {

	return array_sum($valores);
}

echo soma(2, 5)."<br>";

echo soma(100, 43)."<br>";

echo soma(10.5, 3.2)."<br>";

// Aqui pode ver o valor retornado como string
var_dump(soma(4,1))."<br>";


?>