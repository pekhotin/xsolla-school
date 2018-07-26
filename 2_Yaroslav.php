<?php

$inputJson = file_get_contents('php://input');
$obj = json_decode($inputJson, true);

if (!isset($obj['cells']) || !isset($obj['distance'])) {
    exit("Данные не получены");
}

$cells = $obj['cells'];
$distance = $obj['distance'];

print_r($cells);