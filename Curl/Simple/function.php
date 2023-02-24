<?php
function web_curl_http($url) 
{  
   $c = curl_init();
   curl_setopt( $c , CURLOPT_URL , $url);
   curl_setopt( $c , CURLOPT_USERAGENT, "Mozilla/5.0 (Linux Centos 7;) Chrome/74.0.3729.169 Safari/537.36");
   curl_setopt( $c , CURLOPT_RETURNTRANSFER, true);
   curl_setopt( $c , CURLOPT_SSL_VERIFYPEER, false);
   curl_setopt( $c , CURLOPT_SSL_VERIFYHOST, false);
   curl_setopt($c, CURLOPT_REFERER, "votresite.com.ou.eu");

   curl_setopt( $c , CURLOPT_TIMEOUT, 10000); // 10 sec
   $data = curl_exec($c);
   curl_close($c);
   return $data;
}
echo web_curl_http("https://votreurl");
?>
