<?php

/**
 * Created by PhpStorm.
 * User: maestro300697
 * Date: 16.06.2020
 * Time: 09:44
 *
 * @author Artemii Karkusha (maestro300697)
 */

/*
 * Сортировка вставками работает, проходя по массиву и перемещая нужное значение в начало массива.
 * После того, как обработана очередная позиция, мы знаем, что все позиции до нее отсортированы, а после нее — нет.
 */

$array = [8, 4, 9, 3, 5, 1, 7, 4, 2, 9, 7, 1, 4, 5, 7, 21, 44, 12, 13 ,14 ,15 , 66, 99];


/**
 * @param $array
 * @return array
 */
function insertionSort($array)
{
    $sortedArray = [];
    $maxElementInSortedArray = 0;
    $minElementInSortedArray = 0;

    for ($i = 0; $i < count($array); $i++) {
        if ($i == 0) {
            //Задание базового пройденого массива
            //Максимальное число массива
            $maxElementInSortedArray = $array[$i];
            //Минимальное число массива
            $minElementInSortedArray = $array[$i];
            $sortedArray[0] = $array[$i];
        }
        if ($i > 0) {
            //Вслучае если текущий елемент больше максимального в массиве, оставим его на своем месте
            if ($array[$i] > $maxElementInSortedArray) {
                $maxElementInSortedArray = $array[$i];
                $sortedArray[] = $array[$i];
            } elseif ($array[$i] < $minElementInSortedArray) {
                //Если елемент меньше чем минимальный елемент отсортированого массива поставим его на первое место со сдвигом всего массива
                $minElementInSortedArray = $array[$i];
                $timeNumber = $sortedArray[0];
                //echo "timeNumber===" . $sortedArray[0];
                $sortedArray[0] = $minElementInSortedArray;
                //Сдвиг всех елементов вправо
                for ($k = count($sortedArray); $k >= 1; $k--) {
                    if ($k > 1) {
                        $sortedArray[$k] = $sortedArray[$k - 1];
                    }
                    if ($k == 1) {
                        $sortedArray[$k] = $timeNumber;
                    }
                }

            } else {
                //Находждения правильной позиции
                for ($j = 0; $j < count($sortedArray); $j++) {
                    if (count($sortedArray) == 1) {
                        $sortedArray[$j + 1] = $sortedArray[0];
                        $sortedArray[$j] = $array[$i];
                        break;
                    } else {
                        if ($array[$i] >= $sortedArray[$j] and $array[$i] <= $sortedArray[$j + 1]) {
                            //Вставка со сдвигом всех елементов вправо
                            $timeNumber = $sortedArray[$j + 1];
                            $sortedArray[$j + 1] = $array[$i];
                            //Сдвиг всех елементов вправо
                            for ($k = count($sortedArray); $k >= ($j + 1); $k--) {
                                if ($k > ($j + 1)) {
                                    $sortedArray[$k] = $sortedArray[$k - 1];
                                }
                                if ($k == ($j + 2)) {
                                    $sortedArray[$k] = $timeNumber;
                                }
                            }
                            break;

                        }
                    }

                }


            }
        }
    }
    return $sortedArray;
}