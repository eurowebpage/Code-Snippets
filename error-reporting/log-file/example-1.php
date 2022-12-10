<?php
error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);
ini_set('display_errors', '0');
function handleError($errorNumber, $errorString, $errorFile, $errorLine, array $errContext)
{
date_default_timezone_set("Europe/Brussels");
$date = date("Y-m-d h:i:sa");
$id= md5(serialize($errorFile.$errorLine));

$logFilePath = $path_server.'app/logs/myfile.txt';
$allowDefaultLogging = true;
if (0 === error_reporting())
{
return false;
}
####### Log File .txt #########
$message ="Date: $id Date: $date ".$errorFile . ':' . $errorLine . ' errno ' . $errorNumber . ' ' . $errorString . PHP_EOL;
$logHandle = fopen($logFilePath, 'a+');
fwrite($logHandle, $message);
fclose($logHandle);
####### Log File .json #########
$additionalArray = array(
 'id' => $id,
 'date' => $date,
 'errorFile' => $errorFile,
 'errorLine' => $errorLine,
 'errorNumber' => $errorNumber,
 'errorString' => $errorString
);
//open or read json data
$fichier = $path_server.'app/logs/data';
$data_results = file_get_contents($fichier.'.json');
$tempArray = json_decode($data_results);
//append additional json to json file
//$tempArray[$id] = $additionalArray;
$tempArray[] = $additionalArray;
//array_push($tempArray, $additionalArray);
$jsonData = json_encode($tempArray);
file_put_contents($fichier.'.json', $jsonData); 
###############################
return $allowDefaultLogging;
}
set_error_handler('handleError');
####################################
?>
