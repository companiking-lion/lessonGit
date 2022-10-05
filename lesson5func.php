<?php
declare(strict_types=1);
$lineBreak = "<br>";
print_r("welcom,friend!{$lineBreak}");
$straightText = "How are yuo?";
$reverseText = strrev($straightText);
print_r("Straight text:{$straightText}.{$lineBreak} Reverse text:{$reverseText}.{$lineBreak}");
//Введение в степень
$resultOper =2**3;
$resultPow = pow(2,3);
print_r(("Res1:{$resultOper}.{$lineBreak} Res2:{$resultPow}{$lineBreak}"));
//функция без аргумента
$randomNumber = rand(45,56);
print_r("Random number:{$randomNumber}.{$lineBreak}");
//округление
$floatNumber = 56.4356;
$result = round ($floatNumber,2);
print_r("Round:{$result}.{$lineBreak}");


function greethingAnna(){
    $lineBreak ="<br>";
    return"Hello,Igorichio!{$lineBreak}";
}
echo greethingAnna();
// пользовательская функция с аргументом
function greetingNewPerson($name) {
    $lineBreak = "<br>";
    return"Привет,{$name}.{$lineBreak}";
}
echo greetingNewPerson("Allexandr");
echo greetingNewPerson("Игорь");

function greetingNewPersonByNewWord($name,$greetingWord){
    $lineBreak = "<br>";
    return"{$greetingWord},{$name}!{$lineBreak}";

}
echo greetingNewPersonByNewWord("Alex","Hi");
echo greetingNewPersonByNewWord("Janna","Welcome");
function greetingAlex($greetingWord,$name = "Sasha"){
    $lineBreak = "<br>";
    return "{$greetingWord},{$name}!{$lineBreak}";
}
echo greetingAlex("Hi,");
//функция без return не работает

