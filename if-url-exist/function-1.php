<?php
function URL_exists($url){
$streamContext = stream_context_create([
'ssl' => [
'verify_peer'      => false,
'verify_peer_name' => false
]
]);
if(!@file_get_contents($url, false, $streamContext)) {
echo '<p>File exists</p>';
}
else{
echo '<p>File NOT exists</p>';
 }
 }
URL_exists('http://url/dist-file-1.php');
URL_exists('https://url/dist-file-1.php');  

?>
