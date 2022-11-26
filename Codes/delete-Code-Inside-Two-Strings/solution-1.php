<?php
$actual_filename = basename($_SERVER['PHP_SELF']);
##CROPSTART##
$CROPSTART = "CROPSTART";
$CROPEND = "CROPEND";
$str = file_get_contents($actual_filename);
//$str = preg_replace('/'.preg_quote('<!--START_REMOVE-->').'[\s\S]+?'.preg_quote('<!--END_REMOVE-->').'/', '', $str);
$str = preg_replace('/##'.$CROPSTART.'##[\s\S]+?##'.$CROPEND.'##/', '', $str);
file_put_contents($actual_filename, $str);
?>
<?php
##CROPEND##
echo $actual_filename;
?>
