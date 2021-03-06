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
 * Сравниваются два числа, если текущее число больше слудующего делаем перестановку
 * Пока хотя бы одно число больше другого цикл будет повторяться. Пока все числа не будут на своем месте
 *
 * Пример массива
 * [5, 3, 8, 6, 1, 2, 9]
 * Проход по массиву с помощью алгоритма
 * Перестановка сробатывает только если текущее число больше слудующего
 * $i - текущий ключ
 *
 * Первое прохождение
 * ----------
 * $i = 0
 * Рузультат
 * [3, 5, 8, 6, 1, 2, 9]
 *
 * $i = 2
 * Рузультат
 * [3, 5, 6, 8, 1, 2, 9]
 *
 * $i = 3
 * Рузультат
 * [3, 5, 6, 1, 8, 2, 9]
 *
 * $i = 4
 * Рузультат
 * [3, 5, 6, 1, 2, 8, 9]
 * ------- Конец первого прохождения
 *
 * Второе прохождение
 * ------------
 * $i = 2
 * Рузультат
 * [3, 5, 1, 6, 2, 8, 9]
 *
 * $i = 3
 * Рузультат
 * [3, 5, 1, 2, 6, 8, 9]
 * ----- Конец прохождения
 *
 * Третье прохождение
 * ----------
 * $i = 1
 * Рузультат
 * [3, 1, 5, 2, 6, 8, 9]
 *
 * $i = 2
 * Рузультат
 * [3, 1, 2, 5, 6, 8, 9]
 * ----- Конец прохождения
 *
 * Четвертое  прохождение
 * ----------
 * $i = 0
 * Рузультат
 * [1, 3, 2, 5, 6, 8, 9]
 *
 * $i = 1
 * Рузультат
 * [1, 2, 3, 5, 6, 8, 9]
 *
 * ----- Конец прохождения
 * Пятое прохождение
 *
 * Так как не один елемент не больше другого $success = FALSE;
 * While закончил свою работу
 *
 * ------Конец прохождения
 *
 * ---- Массив отсортирован
 * Рузультат
 * [1, 2, 3, 5, 6, 8, 9]
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
                    echo $i . PHP_EOL;
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

bubbleSort($array);




