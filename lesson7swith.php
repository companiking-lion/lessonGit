<?php
/*условная конструкция*/
declare(strict_types=1);
$lineBreak = "<br>";
function typeOfAge($age){
    $lineBreak = "<br>";
    if($age>10&&$age<19){
        return"Возраст $age является подросковым.{$lineBreak}";
    }
    return"Возраст $age не является подросковым.{$lineBreak}";
}
echo typeOfAge(6);
echo typeOfAge(16);


function auth($login,$pass)
{
    $loginFromDB = "Alex";
    $passFromDB = "1234";
    $lineBreak = "<br>";
    $result = " ";
    if ($login === $loginFromDB&&$pass === $passFromDB){
    $result = "Добро пожаловать, Алекс!{$lineBreak}";
} elseif
    ($login === $loginFromDB) {
        $result = "проверьте пароль.{$lineBreak} ";
    }

    else{
        $result = "Пройдите регистрацию.{$lineBreak}";
    }
    return $result;
}
echo auth("Alex","1234");
echo auth("Alex","1235");
echo auth("Anna","1237");

function absT($num){
    $lineBreak = "<br>";
    if($num>=0){
        return $num;
    }else return -$num;
}
$lineBreak = "<br>";
echo absT(-5)."$lineBreak";
echo absT(10)."$lineBreak";

function ternar($num){
    return $num>=0? $num: -$num;
}
$lineBreak = "<br>";
echo ternar(-5)."$lineBreak";
echo ternar(10)."$lineBreak";

$num = 3;
switch ($num) {
    case 1:
        $str = "Winter";
      break;
    case 2:
        $str = "Spring";
        break;
    case 3:
        $str = "Summer";
        break;
    case 4:
        $str = "Fall";
}
echo $str;
