<?php
function dirlist($loc,$class,$start_tag,$end_tag,$other){
$scandir = scandir($loc);
$scandir = array_filter($scandir, function($element){
return !preg_match('/^\./', $element);
});
if(empty($scandir)) echo '<p style="color:red">Empty Dir</p>';
$listdirectories = "";
foreach($scandir as $file){
$baseLink = $loc . DIRECTORY_SEPARATOR . $file;
if(is_dir($baseLink)){
$listdirectories .= ''.$start_tag.'<a class="'.$class.'" href="'.$file.'" '.$other.' title="'.$file.'">'.$file.'</a>'.$end_tag.'';
}
}
return $listdirectories;
}
?>
<!-- Exemple  -->
<?php echo dirlist($path_server,"dropdown-item2","<p>","</p>","target='_blank'");?>

