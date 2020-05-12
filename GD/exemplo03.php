<?php

$image = imagecreatefromjpeg("certificado.jpg");
// pegando imagem existente

$titleColor = imagecolorallocate($image, 0, 0, 0);
// $gray = imagecolorallocate($image, 100, 100, 100);
// Definindo cores

imagettftext($image, 32, 0, 320, 250, $titleColor, "fonts".DIRECTORY_SEPARATOR."Bevan".DIRECTORY_SEPARATOR."Bevan-Regular.ttf", "CERTIFICADO PHP");
imagettftext($image, 32, 0, 375, 350, $titleColor, "fonts".DIRECTORY_SEPARATOR."Playball".DIRECTORY_SEPARATOR."Playball-Regular.ttf" ,"Caio Cesar");
imagestring($image, 3, 440, 370, "Concluido em: ".date("d/m/Y"), $titleColor);
// conteúdos da nova imagem

header("Content-Type: image/jpeg");

imagejpeg($image);

imagedestroy($image);






?>