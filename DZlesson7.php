<?php
declare(strict_types=1);
$lineBreak = "<br>";
$question ="Делал -четверти часа , не могу понять отчего , см.строки 11 ст.14,<br> долго не работал код, пока 0 не поменял на 1<br>  ";
$hello = "Доброго времени суток Эдуард.<br>";
$greeting = $hello.$question;
echo "$greeting.$lineBreak";


function quarterOfAnHour($time){
    $lineBreak = "<br>";
    if(!($time >=0 && $time <=59)){
        return"Введите пожалуйста колчество минут от 0 до 59,<br> ";
    }
    if($time >=1 && $time <=14 ){
        return "$time минут первая четверть часа .$lineBreak";
    }elseif ($time >=15 && $time <=29){
        return "$time минут вторая четверть часа.$lineBreak ";
    }elseif ($time >=30  && $time <=44){
        return "$time минут третья четверть часа .$lineBreak ";
    }elseif ($time >=45  && $time <=59){
        return "$time минут четвертая четверть часа.$lineBreak ";
    }

}
echo quarterOfAnHour(125)."<br>";
echo quarterOfAnHour(25)."<br>";
echo quarterOfAnHour(35)."<br>";
echo quarterOfAnHour(15)."<br>";
echo quarterOfAnHour(5)."<br>";
echo quarterOfAnHour(1)."<br>";
echo quarterOfAnHour(55)."<br>";

//Напишите функцию, которая будет по номеру месяца определять время года.
// Если номера с таким месяцем не существует,
// функция должна выводить соответствующее сообщение.

function monthOfYear($month)
{
    $lineBreak = "<br>";
    $season = " ";
    if (!(is_int($month))) {
        $season = "Введите пожалуйст число от 1 до 12";
        return "{$season}.{$lineBreak}";
    }
    if (($month >= 1 && $month < 2) || $month === 12) {
        $season = "Vinter.{$lineBreak}";
        return "{$season}.{$lineBreak}";
    } elseif ($month >= 3 && $month <= 5) {
        $season = "Spring.{$lineBreak}";
        return "{$season}.{$lineBreak}";
    } elseif ($month >= 6 && $month <= 8) {
        $season = "Summer.{$lineBreak}";
        return "{$season}.{$lineBreak}";
    } elseif ($month >= 9 && $month <= 11) {
        $season = "Fall.{$lineBreak}";
        return "{$season}.{$lineBreak}";
    }
}
echo monthOfYear(1.1);
echo monthOfYear(-25);
echo monthOfYear(1);
echo monthOfYear(3);
echo monthOfYear(6);
echo monthOfYear(9);
echo monthOfYear(12);
echo monthOfYear(8);
//. Напишите функцию, которая будет возвращать квадрат числа,
// если оно четное, и его кубическую степень в противном случае.
function squareCube($num){
    $lineBreark ="<b>";
    if($num%2 ===0 ){
        $num = pow($num,2);
        return "{$num}четное число ,возводим в квадрат.Квадрат равен {$num}.{$lineBreark}";
    }else {
        $num = pow($num,3);

    return "{$num} число нечетное,возводим в куб.Куб равен {$num}.{$lineBreark}";
    }
}
echo squareCube(3);
echo squareCube(4);
echo squareCube(-5);

