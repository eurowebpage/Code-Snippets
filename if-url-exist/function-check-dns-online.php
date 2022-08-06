<?php
function onlineCheck($site){
$timeout = 10;
$curlInit = curl_init($site);
curl_setopt($curlInit,CURLOPT_CONNECTTIMEOUT,$timeout);
curl_setopt($curlInit,CURLOPT_HEADER,true);
curl_setopt($curlInit,CURLOPT_NOBODY,true);
curl_setopt($curlInit,CURLOPT_RETURNTRANSFER,true);
curl_setopt($curlInit, CURLOPT_SSL_VERIFYPEER, FALSE);

$reponse = curl_exec($curlInit);
curl_close($curlInit);
if ($reponse) return true;
return false;
}
// Exemple
$DNSonlineCheck = "google.com";
if(onlineCheck($DNSonlineCheck)){echo "<br>DNS : $DNSonlineCheck en ligne";}
else {echo "<br><br>DNS : $DNSonlineCheck Pas en ligne";}


?>
