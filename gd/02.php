<?php

$image = imagecreatefromjpeg("original.jpg");

$titleColor = imagecolorallocate($image, 0, 0 ,0);

$gray = imagecolorallocate($image, 100, 100, 100);

imagettftext($image, 32, 0, 450, 150, $titleColor, "IBM_Plex_Mono".DIRECTORY_SEPARATOR."IBMPlexMono-Regular.ttf", "CERTIFICADO");

imagettftext($image, 32, 0, 440, 350, $titleColor, "IBM_Plex_Mono".DIRECTORY_SEPARATOR."IBMPlexMono-Light.ttf", "Oziel");

imagestring($image, 3, 440, 370, utf8_decode("Concluído em: ").date("d/m/Y"), $titleColor);


header("Content-type: image/jpeg");

imagejpeg($image);

imagedestroy($image);


?>