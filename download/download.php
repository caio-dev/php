<?php

$link = "https://www.google.com.br/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png";
// url da imagem

$content = file_get_contents($link);
// Pegando conteudo da imagem

$parse = parse_url($link);
// Separando a url
// var_dump($parse);

$basename = basename($parse["path"]);

$file = fopen($basename, "w+");
// O primeiro parametro pode mudar o nome da imagem baixada

fwrite($file, $content);

fclose($file);

?>

<img src="<?=$basename  ?>">





