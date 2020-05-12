<?php

header("Content-Type: image/png");

$image = imagecreate(256, 256);
// Criando imagem informando largura e altura respectivamente

$black = imagecolorallocate($image, 0, 0, 0);
// Definindo cor de fundo

$red = imagecolorallocate($image, 255, 0, 0);

imagestring($image, 5, 60, 120, "Welcome, Web Developer!", $red);
// imagem / tamanho da fonte / eixo X e Y / Texto / cor do texto

imagepng($image);
// Renderizando a imagem

imagedestroy($image);







?>