<?php
header('content-type:image/JPG');
$image = imagecreatefromjpeg("ss.jpg");
$color = imagecolorallocate($image, 51, 51, 102);
$date = date('d F, Y');
imagettftext($image, 18, 0, 880, 188, $color, $font, $date);
$name = "UJWAL";
imagettftext($image, 48, 0, 120, 520, $color, $font, $name);
//imagejpeg($image);
//imagedestroy($image);
?>