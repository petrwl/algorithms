<?php

/**
 * Напишите программу, которая проверит, является ли заданное слово палиндромом
 * Палиндром – это набор знаков (слово, число, фраза), в котором все знаки при прямом прочтении полностью совпадают со знаками при обратном прочтении.
 * То есть палиндромами являются числа 66, 13431, 789987 и т.д.
 */

function is_palindrome($n) {

    $string = (string)$n;
    $length = strlen($string)-1;

    for($i=0; $i<($length/2); $i++) {
        if ($string[$i] != $string[$length-$i]) {
            return false;
        }
    }

    return true;
}

$numbers = ['123456', '123321', '12',  '66', '13431', '789987'];

foreach ($numbers as $number) {
    print "Число " . $number . (is_palindrome($number)? "" : " не") . " является полиндромом\n";
}