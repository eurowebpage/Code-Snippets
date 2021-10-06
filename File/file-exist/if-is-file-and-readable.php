<?php
$filename = '../../test.txt';
if (is_file($filename ) && is_readable($filename )) {
    $message = "The file $filename exists";
} else {
    $message = "The file $filename does not exist";
}
echo $message;
?>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         