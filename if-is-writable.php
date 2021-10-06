<?php
//$fichierm2 ="../../test.txt";
$fichierm2 ="/home/data/scriptphp.eu/test.scriptphp.eu/test.txt";
$content = file_get_contents($fichierm2);
echo $content."<br>" ;

$filename = '../../test.txt';

if (is_writable($filename)) {
    $message = "The file $filename exists";
} else {
    $message = "The file $filename does not exist";
}
echo $message;
?>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                