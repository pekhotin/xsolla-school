<?php

class SocksMachine
{
    //Метод решил сделать статичным
    public static function countUnpaired(array $socks) {
        $cntColors = array_fill(0, 1001, 0); // Массив, i-й элемент которого показывает, сколько имеется носков цвета i.
        foreach ($socks as $sock) {
            $cntColors[$sock]++;
        }

        $result = 0;

        //Считаем, сколько получилось нечетных цветов.
        foreach ($cntColors as $color) {
            if ($color % 2)
                $result++;
        }

        return $result;
    }
}
//Проверка.
//$testSocks = [10, 30, 10, 30, 10, 1, 2, 3, 4, 6];
//echo SocksMachine::countUnpaired($testSocks);