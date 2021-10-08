<?php
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "https://reqres.in/api/users?page=2");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($curl);
if($e = curl_error($curl)) {
echo $e;
} else {
$decodedData = json_decode($response, true); 
var_dump($decodedData);
}
curl_close($curl);
?>
