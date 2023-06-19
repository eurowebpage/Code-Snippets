<?php 
include ("secure.php");
$relativePath = $_SERVER['DOCUMENT_ROOT'];
$dir_install = $_SERVER['REQUEST_URI'];
//$dir_install = str_replace("install/","",$dir_install);
$dir_install = str_replace("index.php","",$dir_install);
$chemin = $relativePath.$dir_install;  

?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>DEV</title>
</head>
<body>
<p><a href ="./?logout">Exit</a></p><hr>
<?php
############################### 
echo $chemin."<hr>";
############################### 

$files_to_hide = array('index.php', 'secure.php');
if ($handle = opendir($chemin)) {
    while (false !== ($file = readdir($handle)))
    {
        if (($file != ".") && ($file != "..") && !in_array($file, $files_to_hide))
        {
            $thelist .= '<p><a href="'.$file.'">'.$file.'</a></p>';
        }
    }

    closedir($handle);
}
echo $thelist;
?>
</body>
</html>
