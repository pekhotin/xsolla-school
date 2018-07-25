<?php

class SocksMachine
{
    public static function countUnpaired(array $socks) {
        $cntColors = array_fill(0, 1001, 0);
        foreach ($socks as $sock) {
            $cntColors[$sock]++;
        }

        $result = 0;

        foreach ($cntColors as $color) {
            if ($color % 2)
                $result++;
        }

        return $result;
    }
}
$testSocks = [10, 30, 10, 30, 10, 1, 2, 3, 4, 6];
echo SocksMachine::countUnpaired($testSocks);