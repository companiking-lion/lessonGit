<?php
declare(strict_types=1);
$lineBreak =" <br>";
$name = "Эдуард";
$greeting = "Приветствую уважаемый,";
echo "{$greeting}{$name}!{$lineBreak}";
/*a старт 0
b плюс 7
c умножить на 4
d вычесть 8
e   разделить на 4
f возвести в куб
g остаток деления на 3)*/

$a = 0;
$b = 7;
$c = 4;
$d = 8;
$e = 4;
$f = 3;
$g = 3;
echo"Стартовое значение равно 0.{$lineBreak}";
echo "Стартовое значение увеличить на 7.{$lineBreak}Равно:";
$sum = $a+$b;
print_r ("$sum.{$lineBreak}");
echo "Полученный результат увеличьте на 4.{$lineBreak} Равно:";
$multiplications = $sum*$c;
print_r("$multiplications.{$lineBreak}");
echo " Из полученного результата отнимите 8.{$lineBreak}Равно:";
$decrease = $multiplications - $d;
print_r("$decrease.{$lineBreak}");
echo "Разделите полученное на 4.{$lineBreak}Равно:";
$division = $decrease/$e;
print_r("$division.{$lineBreak}");
$resultPow = pow($division,$f);
echo "Возведите в куб.{$lineBreak}Это будет:";
print_r("$resultPow.{$lineBreak}");
$remains = $resultPow%$g;
echo "Выведите остаток при делении на 3.{$lineBreak}Остаток:";
print_r("$remains.{$lineBreak}");
$a1 = 50;
$pupil = 'pupil';
echo "$a1${$pupil}{$lineBreak}";
$b1 = 70;
$student = 'student';
echo "$b1${$student}{$lineBreak}";