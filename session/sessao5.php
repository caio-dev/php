<?php

require_once "sessao.php";

// Diretório onde é salva a sessão
echo session_save_path()."<br>";

switch (session_status()) {
	case PHP_SESSION_DISABLED:
		echo "Sessão desabilitada";
		break;

	case PHP_SESSION_NONE:
		echo "Sessão habilitada mas não existe";
		break;

	case PHP_SESSION_ACTIVE:
		echo "Sessão Habilitada e uma existe";
		break;
}

?>