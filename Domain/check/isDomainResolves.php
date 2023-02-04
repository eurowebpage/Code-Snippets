<?php
function isDomainResolves($domain)
{
if (gethostbyname($domain) != $domain){
$return = true;
}
else {
$return = false; 
}
return 	$return;
}
####################################################################
$host = $_GET["host"]; 
$host_check = trim($host);	
$return_resp = isDomainResolves($host_check);
if ($return_resp == true){
$return_resp_ip =gethostbyname(trim($host));
if ($return_resp_ip != $host_ip){
$return_resp_ip2 = "<span style='color:red;'>$return_resp_ip</span>";	
}
else{
$return_resp_ip2 = "<span style='color:green;'>$return_resp_ip</span>";	
	
}
$hostArray .= "$host_check => $return_resp_ip2<br>";	
}else{
$return_resp_ip = "null";	
$hostArray .= "$host_check => $return_resp_ip<br>";	
}

####################################################################
?>
