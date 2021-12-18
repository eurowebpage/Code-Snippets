<?php
$DocRoot = $_SERVER["DOCUMENT_ROOT"]; // /home/dir/site/httpdocs  without " / " in the end
#####################################################################
$url_arbo = $_SERVER['REQUEST_URI']; //returns the current URL
$parts = explode('/',$url_arbo);
$dir = $_SERVER['SERVER_NAME'];
$dir2 ='';       
for ($i = 0; $i < count($parts) -2 ; $i++) {
$dir .= $parts[$i] . "/";
$dir2 .= str_replace($dir,'../',$dir) ;  
}
if($dir2 !==""){
$arbo = $dir2; 
}
else {
$arbo = "./"; 
}
#####################################################################
?>
