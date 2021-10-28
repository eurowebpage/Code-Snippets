<?php
$url_page = "https://your-url/";
##############################################
if (isValidURL("$url_page")) {
echo "URL is valid...";
  } else {
echo "URL is not valid...";
} 
##############################################
  $streamContext = stream_context_create([
'ssl' => [
'verify_peer'      => false,
'verify_peer_name' => false
]
]);   

function isValidURL($url) {
$file_headers = @get_headers($url, false, $streamContext);
if (strpos($file_headers[0], "200 OK") > 0) {
return true;
} else {
return false;
}
}
?>
