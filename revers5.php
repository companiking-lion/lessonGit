<?php
declare(strict_types=1);
$lineBreak = "<br>";
print_r("Привет Настя!{$lineBreak}");
$straightText = "Наша песня хороша, начинай с начала!";
$reversText = strrev($straightText);
print_r("Начальный текст:{$straightText}.{$lineBreak} Перевернутый текст:{$reversText}.{$lineBreak}");

$resultOper = 2**3;
$resultPow = pow(2,4);
print_r("Res1:{$resultOper}.{$lineBreak} Res2:{$resultPow}.{$lineBreak}");

$randomNumber = rand(99,150);
print_r("Рандомное число:{$randomNumber}.{$lineBreak}");

$floatNumber = 99.4995;
$result = round($floatNumber);
print_r("ROUND(округлили до:{$result}).{$lineBreak}");

//пользовательская функция без аргументов
function greetingManya(){
    $lineBreak = "<br>";
    return"Здравствуй Маша!{$lineBreak}";

}
echo greetingManya();
echo greetingManya();

//пользовательская функция c аргументом
function greetingNewHuman($name){
    $lineBreak = "<br>";
    return"Здравствуй уважаемый  {$name}!{$lineBreak}";
}
echo greetingNewHuman("Игорь");
echo greetingNewHuman("Анастешен");
