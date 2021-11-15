<?php
function readJson($file){
    $json = file_get_contents($file);
    return json_decode($json, true);
}

function addJson($arr, $file){
    $jsonFromArr = json_encode($arr, JSON_PRETTY_PRINT);
    file_put_contents($file, $jsonFromArr);
}