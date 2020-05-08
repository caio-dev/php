<?php

// Instancia da classe dateTime
$dt = new dateTime();

echo $dt->format("d/m/Y H:i:s")."<br>";

echo "-----------------------------------------------<br>";

$dt = new dateTime();

// Criando intervalo de 15 dias, as letras usadas são descritas na documentação
$periodo = new DateInterval("P15D");

// Somando periodo
$dt->add($periodo);

echo $dt->format("d/m/Y H:i:s");






?>