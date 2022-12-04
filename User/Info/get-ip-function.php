<?php
function func_ip() {
// Change the line below to your timezone!
date_default_timezone_set('Europe/Brussels');
$date = date('m/d/Y h:i:s a', time());
if (!empty($_SERVER['HTTP_CLIENT_IP'])){
 $ip=$_SERVER['HTTP_CLIENT_IP'];
}
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
 $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
}
else{
 $ip=$_SERVER['REMOTE_ADDR'];
}
if(empty($ip) || $ip=="::1" || $ip=="127.0.0.1")
{
 $ip = file_get_contents('http://api.ipify.org');
}
//print json_encode(array('ip' => $ip));
//echo $date;
$echo = json_encode(array(
'date' => $date,
'ip' => $ip
));
echo $echo;
}
echo func_ip()."<br>";
?>
