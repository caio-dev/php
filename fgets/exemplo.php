<?php

$filename = "html.png";

$base64 = base64_encode(file_get_contents($filename));

$fileinfo = new finfo(FILEINFO_MIME_TYPE);

$mimetype = $fileinfo->file($filename);

$base64encode =  "data:". $mimetype . ";base64," . $base64;

?>

<a href="<?php echo $base64encode?>" target="_blank">Link p/ Imagem</a>
<img src="<?=$base64encode?>">



