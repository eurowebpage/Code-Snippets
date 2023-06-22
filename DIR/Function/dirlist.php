<?php
function dirlist($loc,$link,$class,$start_tag,$end_tag,$other){
$scandir = scandir($loc);
$scandir = array_filter($scandir, function($element){
return !preg_match('/^\./', $element);
});
if(empty($scandir)) echo '<p style="color:red">Empty Dir</p>';
$listdirectories = "";
foreach($scandir as $dir){
$baseLink = $loc . DIRECTORY_SEPARATOR . $dir;
if(is_dir($baseLink)){
$listdirectories .= ''.$start_tag.'<a class="'.$class.'" href="'.$link.$dir.'" '.$other.' title="'.$dir.'">'.$dir.'</a>'.$end_tag.'';
}
}
return $listdirectories;
}
// example : dirlist($path_server,$pluginurl,"dropdown-item2","<p>","</p>","target='_blank'");
?>
<!-- Exemple  -->
<?php echo dirlist($path_server."setting/front/",$pluginurl."setting/front/","dropdown-item","","","");?>
