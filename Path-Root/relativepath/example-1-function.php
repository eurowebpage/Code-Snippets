<?php
function relativepath($to) {
    $a=explode("/",$_SERVER["PHP_SELF"] );
    $index= array_search("$to",$a);
    $str=""; 
    for ($i = 0; $i < count($a)-$index-2; $i++) {
        $str.= "../";
    }
    return $str;
}
echo "<br>".relativepath("");
?>
