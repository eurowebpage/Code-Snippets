<?php
$ref = $_SERVER['HTTP_REFERER'] ;
$referringPage = parse_url( $_SERVER['HTTP_REFERER'] );
if ( stristr( $referringPage['host'], 'www.google.' ) )
{
     $fp = fopen('file.txt', 'a');
    fwrite($fp, "$refer" . "\n"); // Using \n makes a new line. \r\n Windows/MAC
    fclose($fp);
  echo "ref is google $ref";
}
else{
    $fp = fopen('file.txt', 'a');
    fwrite($fp, "No referer" . "\n");
    fclose($fp);
    echo "No referer.";
}
?>
