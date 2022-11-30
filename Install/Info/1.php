<?php
function relativepath($to) {
    $a=explode("/",$_SERVER["PHP_SELF"] );
    $index= array_search("$to",$a);
    $str=""; 
    for ($i = 0; $i < count($a)-$index-2; $i++) {
        $str.= "../";
    }
    return $str;
}
echo "<br>".relativepath("");
############
    $a=explode("/",$_SERVER["PHP_SELF"] );
    $index= array_search("",$a);
    $str=""; 
    for ($i = 0; $i < count($a)-$index-2; $i++) {
        $str.= "../";
    }
    

echo "<br>".$str;
############
define('ROOT_PATH', dirname(__DIR__) . '/');
echo "<br>".ROOT_PATH;
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") { 
$protocolsite = "https://";
} else { 
$protocolsite = "http://";
}
#####
$documentRoot = $_SERVER['DOCUMENT_ROOT'];
####
$page_file_temp = $_SERVER["PHP_SELF"];
$page_directory = dirname($page_file_temp, 1); // 2 pour reculer de 1
####
$serverName = $_SERVER['SERVER_NAME'];
$requestUri = $_SERVER['REQUEST_URI'];
$ActualUrlPage = $protocolsite.$serverName.$requestUri;
$actual_filename = basename($_SERVER['PHP_SELF']);
$checkIp = file_get_contents("https://checkip.ovh/echo.php");
$phpVersion = phpversion();
####
$info = parse_url($ActualUrlPage);
$host = $info['host'];
$ip_addr = gethostbyname($host);
####
$whitelist = array('127.0.0.1', '::1');
if(in_array($_SERVER['REMOTE_ADDR'], $whitelist)){ 
$localhostCheck = "localhost"; 
} else {
$localhostCheck = "Nolocalhost"; 
}
#####
if($ip_addr === $host) {
echo "<br>Could not resolve the IP address for the host $host!<BR/>\n";
} else {
echo "<br>The IP address for the host $host is: $ip_addr<BR/>\n";
}
#####
function isLocal ()
{
return !checkdnsrr($_SERVER['SERVER_NAME'], 'NS');
}
echo "<br>".isLocal();

#####
ob_start();
system('ipconfig /all');
$mycom=ob_get_contents();
ob_clean();
$findme = 'physique';
$pmac = strpos($mycom, $findme);
$mac=substr($mycom,($pmac+32),20);
if(isset($mac) && $mac >3 ){
echo "<br>".$mac;
}
else{
echo "<br>no mac address detected";
}
#####		
echo "<br>".$page_directory;
echo "<br>".$documentRoot;
###
$newpath = realpath($_SERVER["DOCUMENT_ROOT"] . "/../");
echo "<br>sub1 ".$newpath;
###
$path = $documentRoot;
$tmp = explode("/", $path);
array_pop($tmp);
$path_up = implode('/', $tmp);
echo "<br>sub2 ".$path_up;
;
###
echo "<br>".$actual_filename;
echo "<br>".$phpVersion;
echo "<br>".$ip_addr;
echo "<br>".$ActualUrlPage;
echo "<br>".$localhostCheck;
echo "<br>".$protocolsite;
echo "<br>".$serverName;
echo "<br>".$requestUri;
echo "<br>".$checkIp;
?>
