<?php
$doc_root = $_SERVER['DOCUMENT_ROOT'];
echo "doc root : ".$doc_root."<br>";
// doc root : F:/wamp64/www

################################################

$base_dir = basename(__DIR__);
echo "base dir : ".$base_dir."<br>";
// base dir : install

################################################

$last = preg_replace("/\/\w+$/i","install",__DIR__);
echo "last 1 : ".$last."<br>";
// last 1 : F:\wamp64\www\audit-seo\1\install

################################################

echo "Last 1  remove 1 dir : ".dirname($last,1)."<br>";
// Last moin 1 dir : F:\wamp64\www\audit-seo\1

################################################

?>
