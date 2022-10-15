<?php
############# Start Function ######################
function header_location($header_location){
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
// https
header("Location: $header_location");
}
else{
 //http 
stream_context_set_default( [
    'ssl' => [
        'verify_peer' => false,
        'verify_peer_name' => false,
    ],
]);	
header("Location: $header_location", false, $streamContext);
}	}
############### End Function  ####################

header_location("https://google.com");
###################################
?>
