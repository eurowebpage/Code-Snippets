<?php
date_default_timezone_set("Europe/Brussels");
$locale = 'fr_FR.utf8'; 
setlocale(LC_ALL, $locale);  
$sys_date = date("Y-m-d | H:i:s");
$date_h2  = date("d-m-Y");
$jour_lang = date("D M j G:i:s T Y");  
$jour_nom = date("l");
$jour = date("d");
$mois = date("m");
$mois_nom = date("M");
$annee = date("Y");
$date_simple = date("Y-m-d");
?>
