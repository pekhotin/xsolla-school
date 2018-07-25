<?php

$food = [1, 2, 4, 3, 3, 2];
$foodCnt = array_fill(0, 101, 0);

$min = 0;

foreach($food as $f) {
    $foodCnt[$f]++;
    $min = max($foodCnt[$f], $min);
}

echo $min;




