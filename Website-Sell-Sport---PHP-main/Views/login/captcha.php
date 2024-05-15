<?php
session_start();
$string = md5(time());
$string = substr($string, 0, 6);

$_SESSION['captcha'] = $string;

$img = imagecreate(150,50);
$background = imagecolorallocate($img, 179, 231, 228);
$text_color = imagecolorallocate($img, 253, 77, 0);
imagestring($img, 4,40,15, $string, $text_color);

header("Content-type: image/png");
imagepng($img);
imagedestroy($img);
?>