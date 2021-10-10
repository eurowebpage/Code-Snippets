<?php
$image_path ="../../img/php.png";
$image_url ="https://test.scriptphp.eu/img/php.png";
list($width, $height, $type, $attr)=  getimagesize($image_path) ;
echo "width = ".$width." height = ". $height."<br>";
echo '<img src= "'.$image_url.'"><hr>';
?>
