<?php
$url = "http://domain.topar/url";
$domain = parse_url($url, PHP_URL_HOST);
echo "<p>".$domain."</p>";
?>
