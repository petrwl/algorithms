<?php
/**
 * Как найти средний элемент в LinkedList за один проход
 *
 * Решение:
 * Два указателя. Первый указатель - текущий элемент. Второй - текущий элемент умножить на 2
 * @url https://proglib.io/p/15-questions-for-programmers/
 */
$list = [1,2,3,4,5,6,7,8,9,10];

foreach ( $list as $key=>$value) {
 
    $key2 = ($key+1) * 2;
    if (!isset($list[$key2])) {
        print $list[$key] . "\n";
        exit();
    }
}

