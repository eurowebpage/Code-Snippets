<?php
// Mobile function
function isMobile() {
return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}
?>

<?php
if(isMobile()){
$cachefile = 'cache/' . basename($_SERVER['PHP_SELF']) . '.mobil.cache'; // e.g. cache/index.php.cache
//$cachetime = 3600; // time to cache in seconds
}
else {
$cachefile = 'cache/' . basename($_SERVER['PHP_SELF']) . '.cache'; // e.g. cache/index.php.cache
//$cachetime = 3600; // time to cache in seconds	
	}
//if (file_exists($cachefile) && time() - $cachetime <= filemtime($cachefile)) {
	if (file_exists($cachefile)) {

  $c = @file_get_contents($cachefile);
  echo $c;
  exit;
} else {
 // unlink($cachefile);
}

ob_start();
?>
<!DOCTYPE html>

</body>
</html>
<?php
$c = ob_get_contents();
file_put_contents($cachefile, $c);
?>
