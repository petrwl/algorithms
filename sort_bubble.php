<?php
/**
 * Напишите программу для сортировки массива, использующую метод пузырька.
 */

$array  = [1, 5, 2, 7, 0, 3, 3, 2, 10, 5, 6, 9, 3];
$array = [1,2,3,4,5,6,7,8,9,0];
$length = count($array)-1;

$n = 0;
$is_not_sorted = true;
while ($is_not_sorted) {
    $is_not_sorted = false;
    for ($i = 0; $i<$length; $i++) {
        $current = $array[$i];
        $next = $array[$i+1];
        if ($current < $next) {
            $is_not_sorted = true;
            $array[$i] = $next;
            $array[$i+1] = $current;
            $n++;
        }
    }
}


print( implode(',' , $array)) . "\n";
print "operation count: " . $n . "\n";
print "array length: " . $length . "\n";




