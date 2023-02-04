<?php
#######################################################################################
if (!file_exists('path/to/directory')) {
    mkdir('path/to/directory', 0777, true);
}
#######################################################################################
if (!is_dir('path/to/directory')) {
    mkdir('path/to/directory', 0777, true);
}
################## recursively create a long directory path ##########################
function createPath($path) {
    if (is_dir($path)) 
        return true;
    $prev_path = substr($path, 0, strrpos($path, '/', -2) + 1 );
    $return = createPath($prev_path);
    return ($return && is_writable($prev_path)) ? mkdir($path) : false;
}
#######################################################################################
?>
