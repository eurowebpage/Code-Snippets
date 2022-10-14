<?php
$dir_name = "temp/";  // nom du répertoire
$dir = opendir( $dir_name );  // ouvre le répertoire
$files = readdir( $dir );
while ( $files = readdir( $dir ) ) {
if ( $files != "index.php" ) // exception avec l'index.php
unlink( "$dir_name/$files" );  // supprime chaque fichier du répertoire
}
closedir($dir);
rmdir($dir_name);
#######################################
?>
