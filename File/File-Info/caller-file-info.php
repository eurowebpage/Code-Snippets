<?php
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') 
$url = "https"; 
else
$url = "http"; 
$url .= "://"; 
if (strlen($_SERVER["SERVER_NAME"])) $url .= $_SERVER["SERVER_NAME"];
elseif (strlen($_SERVER["HTTP_HOST"])) $url .= $_SERVER["HTTP_HOST"];
if ($_SERVER["SERVER_PORT"] != "80" && $_SERVER["SERVER_PORT"] != "443") 
$url .= ":".$_SERVER["SERVER_PORT"];
$path =  dirname(__FILE__);
$rootPath = $_SERVER['DOCUMENT_ROOT'];
$npath = str_replace('\\', '/', $path);
$actufile = str_replace($rootPath, '', $npath)."/";
$url_actual_file_dir = $url.$actufile;
$filebasename = basename(__FILE__);
$url_actual_file = $url.$actufile.$filebasename;
echo $url_actual_file;
?>
