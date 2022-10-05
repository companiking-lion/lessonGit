<?php
declare(strict_types=1);
$lineBreak = "<br>";

function conscript($age){
    $lineBreak = "<br>";
    if($age<=27&&$age>= 18){
        return"Поздравляем! $age призывной возраст.$lineBreak";
    }
    return"$age не призывной возраст.$lineBreak";
}
echo conscript(21);
echo conscript(29);


function equality($e,$s)
{
    $lineBreak = "<br>";
    return $e === $s;
}
var_dump(equality(7,9));
echo $lineBreak;
var_dump(equality(2,2));
echo $lineBreak;
function theAmount($a,$b)
{
    $Amout = 15;
    return $a + $b > $Amout;
}
var_dump (theAmount(10,9));
echo  $lineBreak;
var_dump (theAmount(3,9));
echo  $lineBreak;
function positiveValue($num1,$num2){
    return $num1>=1 or $num2>=0.1;
}
var_dump(positiveValue(5,-1));
echo $lineBreak;
var_dump(positiveValue(-8,-1));
echo $lineBreak;