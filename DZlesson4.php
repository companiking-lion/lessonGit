<?php
declare(strict_types=1);
$lineBreak ="<br>";
$varic =0;
echo "Стартовое значение $varic.$lineBreak";
$varic += 7;
echo "Увеличьте значение переменной на 7.Равно $varic.$lineBreak";
$varic *=4;
echo "Увеличьте значение переменной в 4 раза. Это будет $varic.$lineBreak";
$varic -=8;
echo "	Уменьшите значение переменной на 8.Получиться $varic.$lineBreak";
$varic /=4;
echo "Разделите значение переменной на 4. Будет $varic.$lineBreak";
$varic **=3;
echo "Возведите значение переменной в 3 степень.Равно: $varic.$lineBreak";
$varic %=3;
echo "Найдите остаток от деления переменной на 3.Будет $varic.$lineBreak";

$pupil = 50;
$stutent = 70;
$$pupil ='учеников' ;
$$student = 'студентов' ;
echo "$pupil ${$pupil}".$lineBreak;
echo "$stutent ${$student}".$lineBreak;



