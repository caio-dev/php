<form method="post">
	
	<input type="text" name="busca">
	<button type="submit">Enviar</button>

</form>

<?php

if (isset($_POST['busca'])) {

	echo strip_tags($_POST["busca"])."<br>";
	// Esta função  retira as tags, impedindo que scripsts sejam interpretados
	echo htmlentities($_POST["busca"]."<br>");
	// Esta função transofmr atudo em texto, exibindo tudo como uma string


}


?>