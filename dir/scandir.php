<?php

$images = scandir("images");
// Informar diretório que será lido;
// Irá retornar um array com o nome dos arquivos;

$data = array();


foreach ($images as $img) {
	
	if (!in_array($img, array(".",".."))) {
		// in_array faz uma busca dentro do array
		// Se não houver ./.. ele vai trazer na busca

		$filename = "images" . DIRECTORY_SEPARATOR . $img;
		// Pegando diretório das imagens

		$info = pathinfo($filename);
		// Traz em um array informações dos arquivos como extensção, nome, diretorio

		$info["size"] = filesize($filename);
		// Tamanho do arquivo em bytes

		$info["modified"] = date("d/m/Y h:i:s", fileatime($filename));
		// Data de modificação do arquivo

		$info["url"] = "http://localhost/curso_hcode/dir/".str_replace("\\", "/", $filename);
		// Url da imagem


		array_push($data, $info);

	}

}

echo json_encode($data);



?>