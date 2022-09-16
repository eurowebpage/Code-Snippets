<?php
$url = "https://your-url.tld/";
$domain = parse_url($url, PHP_URL_HOST);
$ip_domain = gethostbyname($domain);
$reverse = gethostbyaddr($ip_domain);
?>
