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
$IPonlineCheck = "51.75.238.51";
if(onlineCheck($IPonlineCheck)){echo "<br>IP : $IPonlineCheck en ligne";}
else {echo "<br><br>IP : $IPonlineCheck Pas en ligne";}
?>

