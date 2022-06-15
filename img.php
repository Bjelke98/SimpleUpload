<?php
$directory = "up";
$pngArr = glob($directory . "/*.png");
$jpgArr = glob($directory . "/*.jpg");
$jpegArr = glob($directory . "/*.jpeg");
$gifArr = glob($directory . "/*.gif");
$allArr = array_merge($pngArr, $jpgArr, $jpegArr, $gifArr);
echo $allArr[array_rand($allArr)];
?>