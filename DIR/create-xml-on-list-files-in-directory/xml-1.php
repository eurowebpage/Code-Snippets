<?php 
$relativePath = $_SERVER['DOCUMENT_ROOT'];
$dir_install = $_SERVER['REQUEST_URI'];
//$dir_install = str_replace("install/","",$dir_install);
$dir_install = str_replace("xml.php","",$dir_install);
$chemin = $relativePath.$dir_install;  
$actual_link = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$ulrdisplay = dirname($actual_link)."/";
$chemin = $chemin."origine/";
$files_to_hide = array('index.php', 'secure.php');
$thelist='<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
';	
if ($handle = opendir($chemin)) {
    while (false !== ($file = readdir($handle)))
    {
        if (($file != ".") && ($file != "..") && !in_array($file, $files_to_hide))
        {
            $thelist .= '<url><loc>'.$ulrdisplay.$file.'</loc></url>';
        }
    }

    closedir($handle);
}
echo $thelist;
echo "</urlset>";	
?>
<?php
$myfile = fopen("1.xml", "w") or die("Unable to open file!");

$txt = $thelist;
$txt .= "</urlset>";
fwrite($myfile, $txt);
fclose($myfile);
?>
