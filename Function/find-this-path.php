function findThis pathToRoot
<?php
function findThis($get){
    $d = '';
    for($i = 0; $i < 20; $i++){ //this will try 20 times recursively on upper folder
        if(file_exists($d.$get)){
            return $d;
        }else{
            $d.="../";
        }
    }
}
?>
Example :
<?php
$dir_code= dirname($_SERVER['SCRIPT_NAME']);
$dir_code_replace = str_replace($path_dir,"",$dir_code);
$dir_code_explode=str_replace('/', ' ',$dir_code_replace);
$category_name =  explode(' ', trim($dir_code_explode ))[0];
$pathToRoot = findThis($category_name);
echo $pathToRoot;
?>

