<?php

echo "Nesta página, existem varios operadores atuando, analise o código!<br>";

// Atribuição
$nome = "Caio ";

// Concatenar
echo $nome . "Cesar Lima de Oliveira<br>";

// Acrescentar texto
$nome .= ", Desenvolvedor PHP<br>";
echo $nome;


echo "-----------------------------------------------------------------------------------------------------------------------<br>";

// Operações matematicas
$valorTotal = 0;
// Soma
$valorTotal += 125;
// Subtração
$valorTotal -= 25;
echo($valorTotal)."<br>";
// Selecionando 90% do valor
$valorTotal *= .9;
echo($valorTotal)."<br>";

echo "-----------------------------------------------------------------------------------------------------------------------<br>";

$a = 10;
$b = 4;
echo($a + $b)."<br>"; //Soma
echo($a - $b)."<br>"; //Subtração
echo($a * $b)."<br>"; //Multiplicação
echo($a / $b)."<br>"; //Divisão
echo($a % $b)."<br>"; //Módulo (resto da divisão inteira)

echo "-----------------------------------------------------------------------------------------------------------------------<br>";

$a = 30;
$b = 55;

var_dump($a > $b);
echo "<br>";
var_dump($a < $b);
echo "<br>";
var_dump($a == $b);
echo "<br>";
var_dump($a != $b);
echo "<br>";
// Tipos de dados diferentes
$a = 30;
$b = 30.0;

// Compara conteúdo e tipo de dado
var_dump($a === $b);
echo "<br>";

echo "-----------------------------------------------------------------------------------------------------------------------<br>";

// SpaceShip

$a = 55;
$b = 55;

var_dump($a <=> $b);
// Se a > b retorna 1
// Se a == b retorna 0
// Se a < b retorna -1
echo "<br>";

echo "-----------------------------------------------------------------------------------------------------------------------<br>";

$a = NULL;
$b = NULL;
$c = 100;

echo($a ?? $b ?? $c)."<br>";
// Se a variavel for nula, ela não é lida

echo "-----------------------------------------------------------------------------------------------------------------------<br>";

$a = 0;
// Somar depois de exibir
echo($a++);
echo "<br>";
echo($a);
echo "<br>";
// Somar antes de exibir
echo(++$a);
echo "<br>";



?>