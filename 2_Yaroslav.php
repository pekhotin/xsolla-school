<?php

$inputJson = file_get_contents('php://input');
$obj = json_decode($inputJson, true);

if (!isset($obj['cells']) || !isset($obj['distance'])) {
    exit("Data not received");
}

$cells = $obj['cells'];
$distance = $obj['distance'];
$result = 0;


$r["result"] = $result;
$resultString = json_encode($r);
file_put_contents('php://output', $resultString);
// echo '{"result": ' . $result . '}';