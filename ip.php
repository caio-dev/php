<?php

// Informa o IP de quem está acessando;
$ip = $_SERVER["REMOTE_ADDR"];

echo "IP: ";
echo $ip;

echo "</br></br>";

// INforma o arquivo acessado;
$arquivo = $_SERVER["SCRIPT_NAME"];

echo "Arquivo que esta sendo acessado: ";
echo $arquivo;


?>