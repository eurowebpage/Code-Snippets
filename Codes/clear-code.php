<?php
$actual_filename = basename($_SERVER['PHP_SELF']);
$file_source = $actual_filename;
$file_clear = $actual_filename;
$str = file_get_contents($file_source);
$str = preg_replace('/\n(\s*\n)+/', "\n", $str); // supprime toutes les lignes blanche
$str = preg_replace("/<!--((?!batcache)(?!\\[endif\\])[\\s\\S])*?-->/", "", $str); // supprime les comentaires html
$str = preg_replace("/^\s+/m", " ", $str); // supprime espaces blanc debut de ligne
file_put_contents($file_clear, $str);
?>


<?php
$file_source = "cookies.php";
$file_clear = "cookies.php";
$str = file_get_contents($file_source);
$str = preg_replace('/\n(\s*\n)+/', "\n", $str); // supprime toutes les lignes blanche
$str = preg_replace("/<!--((?!batcache)(?!\\[endif\\])[\\s\\S])*?-->/", "", $str); // supprime les comentaires html
$str = preg_replace("/^\s+/m", " ", $str); // supprime espaces blanc debut de ligne
file_put_contents($file_clear, $str);
?>


