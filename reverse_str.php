<?php
/**
 * Как изменить порядок элементов в строке на обратный без использования вспомогательных классов?
 */

$string = "robot";
$length = strlen($string);
$new_string = '';

$key = 0;
while (isset($string[$key])) {
    $new_string .= $string[$length - $key - 1];
    $key++;
}

print $new_string;
