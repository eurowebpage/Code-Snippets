<?php
// automatically generate links of my folder's file

###################### simple ######################
 $folder = './';
    $files = GLOB($folder . '*{.*}', GLOB_BRACE);
    foreach ($files as $file) {
        echo '<a href="'.$file.'" download>'.basename($file).'</a><br>';
    }
###################### choix extension ######################
   $folder = './';
    $file_types = array(
        'php',
        'pdf',
        'txt'
    );

    $files = GLOB($folder . '*{.' . implode(',.',$file_types) . '}', GLOB_BRACE);
    foreach ($files as $file) {
        echo '<a href="'.$file.'" download>'.basename($file).'</a>';
    }
######################	
?>
