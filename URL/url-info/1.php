<?php
$protocol =((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";  
$hostame  = $_SERVER['HTTP_HOST'];
$script   = $_SERVER['SCRIPT_NAME'];
$params   = $_SERVER['QUERY_STRING'];
if ($params == ""){
$currentUrl = $protocol  . $hostame . $script . $params;
}
else {
$currentUrl = $protocol  . $hostame . $script . '?' . $params;
}
$tld = parse_url($currentUrl);
$tld = (isset($tld['scheme']) ? $tld['host'] : $tld['path']);
$tld = explode('.',$tld);
$tld = end($tld);
if(!isset($tld)? $tld : null){
$tld=$tld;
}else{
$tld="empty";
}

$url = "https://www.abc.xyz/test";  //With https URL_SCHEME 
//$url = $currentUrl;  //Without https URL_SCHEME 

$tld = parse_url($currentUrl);
$tld = (isset($tld['scheme']) ? $tld['host'] : $tld['path']);
$tld = explode('.',$tld);
$tld = end($tld);
echo $tld;
echo '<hr>';
$tld = end(explode(".", parse_url($url, PHP_URL_HOST))); 
echo $tld;
echo '<hr>';
$server_name =  $protocol. $_SERVER['SERVER_NAME'];
echo "server_name url : ".$server_name . "<br>";

echo '<hr>';
echo end(explode(".", parse_url($server_name, PHP_URL_HOST)));
echo '<hr>';
echo "current url : ".$currentUrl . "<br>";
echo "protocol url : ".$protocol . "<br>";
echo "hostame url : ".$hostame . "<br>";
echo "tld url : ".$tld . "<br>";
echo '<hr>';
?>
