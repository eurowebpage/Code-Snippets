<?php
strstr($_SERVER['HTTP_REFERER'], 'test.scriptphp.eu') or exit('denied');

//header("HTTP/1.0 404 Not Found");
echo "PHP continues.\n";
//die();
//echo "Not after a die, however.\n";
$dom_refer = parse_url($_SERVER['HTTP_REFERER'], PHP_URL_HOST);
if(!empty($dom_refer)){
echo "<br>".$dom_refer."<br>";
}
else {
echo "<br>Refer is empty<br>"; 

}
$check_var ="";
$ip = gethostbyname($_SERVER['SERVER_NAME']);
$ip_check = $ip;
if($ip_check=='178.32.115.206'){
echo "<br>OK .... Refer is $ip_check<br>"; 	
}
else {
echo "<br>NOK ... Refer is $ip_check<br>"; 	
header("HTTP/1.0 404 Not Found");
	
	}
?>
