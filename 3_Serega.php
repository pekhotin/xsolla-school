<?php

$inputLine = trim(fgets(STDIN));

$food = explode(' ', $inputLine);
$foodCnt = array_fill(0, 101, 0);

$min = 0;

foreach($food as $f) {
    $foodCnt[$f]++;
    $min = max($foodCnt[$f], $min);
}

fwrite(STDOUT, $min);



