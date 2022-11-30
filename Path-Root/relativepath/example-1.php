<?php
    $a=explode("/",$_SERVER["PHP_SELF"] );
    $index= array_search("",$a);
    $str=""; 
    for ($i = 0; $i < count($a)-$index-2; $i++) {
        $str.= "../";
    }
    

echo "<br>".$str;
// ex output : ../../../
?>
