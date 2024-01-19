<!DOCTYPE html><html lang="fr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<style> 
textarea {
  width: 100%;
  height: 400px;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  background-color: #f8f8f8;
  font-size: 16px;
  resize: none;
}
</style>
</head>
<body>
<?php
$blacklist = array("index2.php", "two.txt", "four.html");
$files = array_diff(glob("*"), $blacklist);
$files = array_filter($files, 'is_file');
	
$fichier ="";
//$droit = array();
foreach($files as $file){	
$droit =  substr(decoct(fileperms($file)), -4); // 0644
//var_dump( $me);
$fichier .= "<div class='post'><a href='" . $_SERVER['PHP_SELF'] . "?file=" . $file . "'><p>" . $file . " === " . $droit . "</p></a></div>";		
}


echo $fichier;
    if(!empty($_GET["file"]) && !in_array($_GET["file"], $blacklist) && file_exists($_GET["file"]))
        $thesource = htmlentities(file_get_contents($_GET["file"]));
/*
$filename = 'index.php';
echo"<hr>";
echo substr(decoct(fileperms("log-append.sh")), -4); // 0644
echo "<hr>";
*/

?>

<textarea rows="30" cols="100%" placeholder="Source code of file" class="source"><?php if(!empty($thesource))echo $thesource; ?></textarea>

</body></html>
