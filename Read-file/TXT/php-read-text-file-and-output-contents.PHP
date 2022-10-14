<?php
$getLinks = file_get_contents('links.txt');
$files = explode("\r\n", $getLinks);
foreach ($files as $file) {

echo "<a href='".$file."' target ='_blank'>".$file."</a><br>";
}
?>
