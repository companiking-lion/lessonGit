<?php
declare(strict_types=1);
$lineBreak = "<br>";

//Выберите любые пол месяца года и составьте массив из значений
// температуры воздуха в соответствии с количеством дней в нем.
//По очереди выведите следующие значения:
//a.	Средняя температура месяца;
//b.	Три самых высоких значений температуры;
//c.	Три самых низких значений температуры.
//Для выбора трех высоких и трех низких температур используйте стандартную функцию array_slice().
$airTemperatures = array(-5,-4.1,0,0,-1.2,0,0,0,0,0,1.1,0,-10,-15);
$count = count($airTemperatures);
$sum = 0;
foreach ($airTemperatures as $temper){
    $sum += $temper;
}
$averageTemp = round($sum/$count);
echo "Среднее значение температуры за две недели месяца:$averageTemp &deg;C {$lineBreak}";

rsort($airTemperatures).$lineBreak;
$highTemp = array_slice($airTemperatures,0,3);
echo "Три высоких значения температуры: .$lineBreak";
foreach ($highTemp as $high){
    echo "$high &deg;C $lineBreak";
}
$lowTemp = array_slice($airTemperatures,-3,3);
echo "Три нзких значения температуры: .$lineBreak";
foreach ($lowTemp as $low ){
    echo "$low &deg;C $lineBreak";
}
//Создайте многомерный массив из 10 подмассивов.
// Заполните каждый из подмассивов 10-ю случайными числами
// в диапазоне значений от 1 до 10
echo "Многомассив.$lineBreak";
$numD = [];
for($i=0;$i<10;$i++){
    echo "Результат расчета массива <b>{$i}:</b>";
    for ($j =0;$j <10;$j++){
        echo $numD[$i][$j] = rand(1,10);
        echo $numD[$i][$j]." ";
    }
    echo $lineBreak;
}
echo $lineBreak;

//Создайте многомерный массив с данными пользователей:
// имя пользователя, логин и пароль. При
//  организации подмассивов используйте формат ключ-значение ("userName" => "Stanley").
// С помощью цикла выведите данные пользователей также в формате ключ-значение.
$logins = array(
    array("name" => "user1","login"=>"igor","passport"=>"1234"),
    array("name"=>"user2","login"=>"sveta","passport"=>"5678"),
    array("name" => "user3","login"=> "nastya","passport"=>"9123"),
    array("name" => "user4","login"=>"nata","passport" => "4567")
);
foreach ($logins as $name){
    foreach ($name as $key =>$value ){
        echo "$key:$value.$lineBreak";
    }
    echo $lineBreak;
}
echo $lineBreak;
//Посчитайте сумму квадратов чисел в диапазоне от 1 до 25.
$result = 0;
for($i = 0;$i < 26;$i++){
    $result +=pow($i,2);
}
echo $result.$lineBreak;
//Напишите функцию, которая будет формировать приветственную фразу для
// разных пользователей (разных имен).
// Дополните эту функцию возможностью выводить приветствие
// на разных языках: русский, английский, французский и итальянский.
function greeting($language,$name){
   $greetingsArr = array('france'=>'Bonjur!','russen' => 'Здравствуйте!',
        'englih' => 'Hello!','itali' => 'Bonjori!');
   $text = $greetingsArr[$language] ."  ". $name. " ! ";
   return $text."<br>";
}
echo greeting('russen','Эдуард')."<br>";
echo greeting('france','Petro ')."<br>";
echo greeting('englih','Jordj')."<br>";
 echo greeting('itali','Basilio')."<br>";

$information = <<<INFO
У лукоморья дуб зеленый,
 златая цепь на дубе том,
и днем и ночью кот ученый
все ходит по цепи кругом.
INFO;
echo $information.$lineBreak;
echo $lineBreak;

$information = <<<INFO
У лукоморья дуб зеленый,
 златая цепь на дубе том,
и днем и ночью кот ученый
все ходит по цепи кругом.
INFO;
echo nl2br($information)."<br>";

//. С помощью стандартных функций substr(), chunk_split()
//date() выведите строку “010122” в формате даты “01.01.2022”.
$date = "01012022";
     echo substr(chunk_split($date,2,'.'),0,-1);
     echo "<br>";
echo chunk_split($date,2,'.').$lineBreak;
//С помощью стандартной функции strpos() определите,
// есть ли подстрока “пяти” во фразе “Я считаю до пяти”.
// Организуйте вывод с помощью условной конструкции.
$str ="Я считаю до пяти, не могу до десяти";
    if(strpos($str,'пяти')!==false){
echo "в строке присутствует 'пяти'. ";
}else {
        echo "в строке не присутствует 'пяти'.$lineBreak";
    }
    echo $lineBreak;
    //Определите имя файл в строке пути к нему
// “C:/OpenServer/domains/localhost/index.php”.
// Используйте стандартные функции substr() и strrchr().
$fileInThePathString =  'C:/OpenServer/domains/localhost/index.php';
$PatchFile = substr(strrchr($fileInThePathString,"/"),1);
echo $PatchFile;
