<?php

$file = fopen("teste.txt", "w+");

fclose($file);

unlink("teste.txt");
// Excluindo o arquivo, e não a variavel que armazena o ponteiro indicador
echo "Arquivo excluído com sucesso!<br>";
var_dump($file);






?>