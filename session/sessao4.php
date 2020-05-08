<?php

require_once("sessao.php");

// Comando para gerar um novo id de sessão
session_regenerate_id();

echo session_id();

echo "<br>";

// var_dump($_SESSION);


?>