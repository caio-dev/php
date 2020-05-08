<?php

$nome = "Caio cesar lima de oliveira";

echo "Orifinal: $nome<br>";

// Tudo Maiusculo
echo strtoupper($nome)."<br>";

// Tudo Minusculo
echo strtolower($nome)."<br>";

// Iniciais de palavras maiusculas
echo ucwords($nome)."<br>";

// Primeira letra maiuscula
echo ucfirst($nome)."<br>";

echo "-----------------------------------------------------------------------------------------------------------------------<br>";

// Substituição
// subistituido - substituto - alvo
$nome2 = str_replace("lima de oliveira", "", $nome);
echo($nome2)."<br>";

echo "-----------------------------------------------------------------------------------------------------------------------<br>";

// Buscando indice a partir de caractera
$frase = "Frase bonita aqui!<br>";
$i = strpos($frase, "bonita");
echo($i)."<br>";

echo "-----------------------------------------------------------------------------------------------------------------------<br>";

// Buscar texto a partir de indice
// String inteira - indice inicial - indice final
$texto = substr($frase, 0, $i);
echo($texto)."<br>";

echo "-----------------------------------------------------------------------------------------------------------------------<br>";

// Informa a quantidade de caracteres da String
$tamanho = strlen($frase);
echo($tamanho)."<br>";






























?>