<?php
$image_path ="https://test.scriptphp.eu/img/php.png";
list($width, $height, $type, $attr)= getimagesize($image_path) ;
echo "width = ".$width." height = ". $height."<br>";
echo "Type = ".$type." Extension = ". $attr."<br>";
?>
