<?php

function soma(int ...$valores){

	return array_sum($valores);
}


echo soma(2, 5)."<br>";

echo soma(100, 43)."<br>";

echo soma(10.5, 3.2)."<br>";

?>