<?php
############################### 
$dirs = array_filter(glob('../*'), 'is_dir');
$blacklist = array('.', '..', 'AppFront4','install');
$admin_directory ="";
foreach ($dirs as $dirlist){
$dirlist=str_replace('../', '',$dirlist);
if (!in_array($dirlist, $blacklist)) {
$admin_dir = $dirlist;
$admin_directory .= '<div class="form-group">
<label for="'.$admin_dir.'">'.$admin_dir.'  </label>
<input id="'.$admin_dir.'" name="f_'.$admin_dir.'" value="'.$admin_dir.'" class="form-control ml-2 mr-2" readonly>
</div>';
}	
}
if(isset($admin_directory)){
$admin_dir = $admin_directory;
}
###############################
?>
