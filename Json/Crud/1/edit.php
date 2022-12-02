<?php
$fichier = date("d-m-Y");

$jsonString = file_get_contents($fichier.'.json');
$data = json_decode($jsonString, true);

$data['id'] = "4";

$newJsonString = json_encode($data);
file_put_contents($fichier.'.json', $newJsonString);
?>
