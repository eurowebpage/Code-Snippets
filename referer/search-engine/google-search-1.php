<?php 
// take the referer
$thereferer = strtolower($_SERVER['HTTP_REFERER']);
// see if it comes from google
if (strpos($thereferer,"google")) {
    // delete all before q=
    $a = substr($thereferer, strpos($thereferer,"q="));     
    // delete q=
    $a = substr($a,2);
    // delete all FROM the next & onwards
    if (strpos($a,"&")) {
        $a = substr($a, 0,strpos($a,"&"));
    }   
    // we have the results.
    $mygooglekeyword = urldecode($a);
echo $mygooglekeyword;
}
?>
