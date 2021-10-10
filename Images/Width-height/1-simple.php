<?php
$image_path ="../../img/php.png";
// ou
//$image_path ="https://test.scriptphp.eu/img/php.png";
list($width, $height, $type, $attr)= getimagesize($image_path) ;
echo "width = ".$width." height = ". $height."<br>";
?>
