<?php
//Напишите функцию, которая в данном трехзначном числе переставляет цифры так,
// чтобы новое число оказалось наибольшим из возможных.
// Не используйте стандартные функции.
//168
$resulte = "<br> ";
function maxUser($numMax)
{  // $resulte = " ";
    $maxH = ($numMax - $numMax % 100) / 100;
    $maxD = ($numMax - $numMax % 10) / 10;
    $maxU = $numMax % 10;
    if ($maxH >= $maxD && $maxH >= $maxU) {
        if ($maxD >= $maxU) {
            $resulte = $maxH . $maxD . $maxU;
        } else {
            $resulte = $maxH . $maxU . $maxD;
        }
        if ($maxU >= $maxD) {
            $resulte = $maxU . $maxH . $maxD;
        } else if ($maxD >= $maxH) {
            if ($maxU >= $maxH) {
                $resulte = $maxD . $maxU . $maxH;
            } else {
                $resulte = $maxD . $maxH . $maxU;
            }
        } else {
            $resulte = $maxU . $maxD . $maxH;
        }
    }
}
return $resulte;

echo maxUser(179
    ).PHP_EOL;

