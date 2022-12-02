<?php
$fichier = date("d-m-Y");
$id = "1";
$title = "1";
$content = "1";
$additionalArray = array(
    'id' => $id,
    'title' => $title,
    'content' => $content
);

//open or read json data
$data_results = file_get_contents($fichier.'.json');
$tempArray = json_decode($data_results);

//append additional json to json file
$tempArray = $additionalArray ;
//$tempArray[] = $additionalArray ;
$jsonData = json_encode($tempArray);

file_put_contents($fichier.'.json', $jsonData);   
	
?>
