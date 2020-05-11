<?php

// $file = fopen("log.txt", "w+");
// O "w" zera o conteúdo do arquivo e escreve

$file = fopen("log.txt", "a+"); // o "a" vai preservar o conteúdo
// Criando arquivo log.txt

fwrite($file, date("d/m/Y h:i:s"). "\r\n");
// Escrevendo a data e hotra no arquivo

fclose($file);
// Fechando arquivo

echo "Arquivo criado com sucesso!";














?>