<?php
$file = file_get_contents("/home/zuzak/public_html/chippy.ch/log/access.log");
//$file = "foo";
$ip = $_SERVER['REMOTE_ADDR'];

$count = substr_count($file,$ip);

echo $count;
echo ".";