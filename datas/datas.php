<?php


// https://www.php.net/manual/pt_BR/function.date.php
// pegando data atual do servidor
echo date("d/m/Y H:i:s")."<br>";

// pegando timestamp
echo time()."<br>";

// Definindo uma data
$tempo = strtotime("1999-04-08");

// Manipulando data
//$tempo = strtotime("+1 week");

echo date("l, d/m/Y", $tempo);


?>