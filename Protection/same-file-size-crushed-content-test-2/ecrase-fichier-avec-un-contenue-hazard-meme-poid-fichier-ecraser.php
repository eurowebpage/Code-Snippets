<?Php
function generate_file($file_name, $size_in_bytes)
{
$data = str_repeat(rand(0,9), $size_in_bytes);
file_put_contents($file_name, $data); //writes $data in a file   
}
?>
<?php
$filename = 'log_08-Aug-2022.txt';
$filename_size = filesize($filename);
$filename_size2 = round($filename_size / 1024, 5); // kilobytes with two digits
echo $filename_size2;
echo generate_file($filename,$filename_size);
?>
