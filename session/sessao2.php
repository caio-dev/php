<?php

session_start();

// Comando que apaga as variaveis de sessão
// session_unset($_SESSION['nome']);
// Comando que DESTROI o usuario da sessão
// session_destroy();

// Só vai exibir conteúdo se o sessao for iniciado (pois ele "cria" o valor);
echo $_SESSION['nome'];

?>