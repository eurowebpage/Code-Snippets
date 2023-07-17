<?php
$CROPSTART = "cookie.php";
$CROPEND = "cookie.php";

$file_source = $path_server."doc.txt";
$str = file_get_contents($file_source);
    $str = htmlspecialchars( $str );

//$str = preg_replace('/'.preg_quote('<!--START_REMOVE-->').'[\s\S]+?'.preg_quote('<!--END_REMOVE-->').'/', '', $str);
$str = preg_match('/##'.$CROPSTART.'##[\s\S]+?##'.$CROPEND.'##/', $str, $matches);
foreach ($matches as $ht){
  echo '<pre class="notranslate">'.$ht.'</pre>';
}

?>
