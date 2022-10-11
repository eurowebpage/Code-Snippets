<?php
############################### 
$dirs = array_filter(glob('../*'), 'is_dir');
$blacklist = array('.', '..', 'AppFront','install');
$admin_directory ="";
foreach ($dirs as $dirlist){
$dirlist=str_replace('../', '',$dirlist);
if (!in_array($dirlist, $blacklist)) {
$admin_directory .= $dirlist;
}
}
if(isset($admin_directory)){
$admin_dir = $admin_directory;
}
echo $admin_dir;
############################### 

?>
