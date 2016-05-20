<?php
header('Content-Type: application/json');

$filelist = Array();

$JSON_DIR = '../json/';

foreach(glob($JSON_DIR.'*') as $file) {
    $fluff = Array($JSON_DIR, ".json");
    $clean_name = str_replace($fluff, "", $file);
    $filelist[] = $clean_name;
}
echo json_encode($filelist);
