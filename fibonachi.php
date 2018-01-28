<?php

/**
 * Напишите программу для вывода чисел Фибоначчи
 */

$n = 10;
$result = [];

// нерекурсивное вычисление
for($i = 0; $i<=$n; $i++){
    if($i == 0 || $i == 1){
        $result[] = 1;
        continue;
    }
    $result[] = $result[$i-1] + $result[$i-2];
}

// нерекурсивное вычисление
function fibonachi_no_req($n){
    for ($i=0; $i<$n; $i++) {
        if ($i == 0) {
            $current = 1;
        } else if ($i == 1) {
            $current = $prev = 1;
        } else {
            $tmp = $current;
            $current = $prev + $current;
            $prev = $tmp;
        }
    }
    return $current;
}

// рекурсивное вычисление
function fibonachi($n)
{
    if ($n==0 || $n == 1) {
        return $n;
    }
    return fibonachi($n-1) + fibonachi($n-2);
}

print "Ряд фибоначи: " . (implode(',', $result)) . "\n";

print "Не рекурсичное вычисление числа фибоначи: " . fibonachi_no_req($n) . "\n";
print "Рекурсичное вычисление числа фибоначи: " . fibonachi($n);