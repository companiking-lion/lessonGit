<?php
declare(strict_types=1);
$b = "Привет";
$a = 567;
var_dump($b,$a)."\n";

print_r($b)."\n";

print_r($a);
$c = 7E-10."\n";
var_dump($c);
$name = 'Igor';// мое имя Игорь
$hello = "Привет Синергия!.$name";
var_dump($name);
var_dump($hello);
define('CONSTANT', 'Egor');
echo CONSTANT."\n";
const Masha =['Olay','Igor', 'Nastay'];
echo Masha [1]."\n";
const Tkach = Masha[1] . ",Спасибо тебе господи";
var_dump(Tkach)."\n";
define('CONSTANT1',['Masha','Katay',' Sveta']);
print_r(CONSTANT1[2])."\n";

define('CONSTANT2','Привет коллеги!');
echo CONSTANT2."\n";
const Igor = CONSTANT2.'; Досвидание коллеги!';
echo Igor."\n";

$i = 2;
/*if($i ===2){
    echo 'победа!'."\n";
}elseif ($i ===3){
    echo 'супер игра';
}elseif ($i === 4){
    echo 'конец игры';
}*/
// проверил оба варианта работают и elseif и switch

switch ($i){
    case 0;
        echo "i = 0";
        break;
    case 1;
        echo "i = 1";
        break;
    case 2;
        echo "i = 2"."\n";
        break;
}
$userName = false;
/*if($userName){
    $action = 'registr';
}else{
    $action = 'open_profile';
}*/
$action = $userName ? 'registr' : 'open_profile'."\n";

//оператор обьеденения с null или коалесцентный оператор.
/*if(isset($name))//isset проверяет ,если $name существует, то присвоить акшен переменной нейм,иначе присвоить нбю юзер {
    $action = $name;
}else{
    $action = 'newUser';

}*/
//верхнее заменяем /*  */, одной строкой
//$name = '';
$action1 = $name ?? 'newUser';
var_dump($action1);


// домашка
//Создайте числовую константу 3 и с помощью конструкции switch или elseif выражение для сравнения

define('CONSTANT 3',['$Masha','$Igor','$Misha']);
$Igor = 'я это сделал, ха!';
switch($Igor) {
       case 'я сделал';
        echo $Igor;
        break;
       case 'я сделал, ха!';
        echo $Igor;
        break;
        case'я это сделал, ха!';
        echo $Igor;
        break;
}




