<?php
declare(strict_types=1);
/*1. min max :Два и более.
2.по умолчанию =справа.
 */
 //3.площадь прямоугольника -rectangleArea.

function rectangleArea ( $height,$width){
    $lineBreak = "<br>";
    $area = $height*$width;

echo "Площадь прямоугольника высотой : {$height}  и шириной : {$width }.{$lineBreak} равна:{$area}.{$lineBreak}";
}
rectangleArea(9,5);
// гипотенуза-hypotenuse
$sideA = 57;
$sideB = 56;
function hypo($sideA,$sideB){
    $lineBreak = "<br>";
    $accuracy = 3;
    $hypotenuse = hypot($sideA,$sideB);
        return "$hypotenuse.{$lineBreak}";
}
echo hypo(57,56);
//print_r("Гипотенуза прямоугольного треугольника с сторонами {$sideA} и {$sideB}. Равна:" {$hypotenuse}.{$lineBreak}");
//$sideA1 = 4;
//$sideB1 = 1;

    //$lineBreak = "<br>";
   // $hypotenuse = hypot(4,1);
//echo "Гипотенуза прямоугольного треугольника со сторонами :{$sideA} и {$sideB}.{$lineBreak}Будет равна:{$hypotenuse}.{$lineBreak}";
$lineBreak ="<br>";

$randomNum = rand(67,200);
print_r("Random num:{$randomNum}.{$lineBreak}");
$floatNum = rand(67,200)/100;
print_r("Random num:{$floatNum}.{$lineBreak}");