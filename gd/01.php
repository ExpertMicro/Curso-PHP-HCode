<?php

header("Content-Type: img/png");

$img = imagecreate(256,256);

$black = imagecolorallocate($img, 0, 0, 0);
$red = imagecolorallocate($img, 255, 0, 0);

imagestring($img, 5, 60, 120, "Curso php 7", $red);

imagepng($img);
imagedestroy($img);

?>