<?php
date_default_timezone_set("Europe/Brussels");
setlocale(LC_TIME, 'fra_fra');
$datelog =  strftime('%Y-%m-%d %H:%M:%S');
echo "<p>$datelog</p>";
?>
