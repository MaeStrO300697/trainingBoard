<?php
/**
 * Created by PhpStorm.
 * User: maestro300697
 * Date: 16.06.2020
 * Time: 08:30
 *
 * @author Artemii Karkusha (maestro300697)
 */

/*
 * Сортировка пузырьком / Bubble sort
 *
 * Сортировка пузырьком — это самый простой алгоритм сортировки. Он проходит по массиву несколько раз, на каждом этапе перемещая самое большое значение из неотсортированных в конец массива.
 *
 */

$array = [5, 3, 8, 6, 1, 2, 9];

/**
 * @param $array
 * @return mixed
 */
function bubbleSort($array)
{
    $success = true;
    while ($success) {
        $success = false;
        for ($i = 0; $i < count($array); $i++) {
            //Исколючаем ключ больше количества елементов массива
            if (count($array) != $i + 1) {
                //Сравниваем числа. Если текущее число больше переставляем местами
                if ($array[$i] > $array[$i + 1]) {
                    //Перестановка елементов
                    $timeNumber = $array[$i];
                    $array[$i] = $array[$i + 1];
                    $array[$i + 1] = $timeNumber;
                    $success = true;
                }
            }
        }
    }
    return $array;
}




