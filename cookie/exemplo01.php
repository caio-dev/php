<?php 

$data = array(
	"empresa"=> "Argus Ltda"
);

setcookie("NOME_DO_COOKIE", json_encode($data), time() + 3600);
// Nome do cookie - valor do cookie - tempo que o cookie permanece (em time stamp)

echo "Ok";












 ?>