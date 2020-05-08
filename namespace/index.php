<?php

require_once("config.php");

use Cliente\Cadastro;


$cad = new Cadastro();

$cad->setNome("Caio Cesar");
$cad->setEmail("caio.cesar.dec15@gmail.com");
$cad->setSenha("senha123");

$cad->registrarVenda();



?>