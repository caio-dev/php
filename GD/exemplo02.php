<?php

$image = imagecreatefromjpeg("certificado.jpg");
// pegando imagem existente

$titleColor = imagecolorallocate($image, 0, 0, 0);
// $gray = imagecolorallocate($image, 100, 100, 100);
// Definindo cores

imagestring($image, 5, 450, 150, "CERTIFICADO PHP", $titleColor);
imagestring($image, 5, 440, 350, "Caio Cesar", $titleColor);
imagestring($image, 3, 440, 370, "Concluido em: ".date("d/m/Y"), $titleColor);
// conteúdos da nova imagem

header("Content-Type: image/jpeg");

imagejpeg($image);

imagedestroy($image);






?>