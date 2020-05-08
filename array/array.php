<?php

// Arrays começam na posição 0
$frutas = array("Melancia", "Abacate", "Melão");
print_r($frutas);

echo "<br>";
echo "------------------------------------------------------"."<br>";


$carros[0][0] = "GM";
$carros[0][1] = "Cobalt";
$carros[0][2] = "Onix";
$carros[0][3] = "Camaro";


$carros[1][0] = "Ford";
$carros[1][1] = "Fiesta";
$carros[1][2] = "Fusion";
$carros[1][3] = "Eco Sport";

echo $carros[0][3]."<br>";

echo end($carros[1])."<br>";


echo "------------------------------------------------------"."<br>";


// Inserindo dados em array
$pessoas = array();

array_push($pessoas, array(
	'nome' => 'Caio',
	'idade' => '21'
));

array_push($pessoas, array(
	'nome' => 'Maria',
	'idade' => '30'
));

print_r($pessoas);


?>