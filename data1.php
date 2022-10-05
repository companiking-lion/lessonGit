<?php
declare(strict_types=1);
$lineBreak = "<br>";
$link = mysqli_connect("localphp","root","","orderstable");
if($link == false){
    print"Невозможно подключиться к MySQL. Ошибка:" .mysqli_connect_error();
}else{
    print "Соединение произшло успешно! Поздравляем!".$lineBreak;
}
mysqli_set_charset($link,"utf-8").$lineBreak;
$sql = 'SELECT id,Name,Phone FORM clients ORDER BY id LIMIT 2';
$result = mysqli_query($link,$sql);
//echo var_dump($result);
//echo "Количество строк в таблице клиентов:  ." . mysqli_num_rows($result);
while ($row = mysqli_fetch_array($result)){
    print (" <br> Имя клиенти:" .$row[ 'Name']."Индентификатор".$row['id'] ." Телефон ". $row['Phone']. "<br>");
}
 //сщздание таблицы по индексу while ($row = mysqli_fetch_array($result,MYSQLI_NUM)){
 //   print (" <br> Имя клиенти:" .$row[ '0']."Индентификатор  ".$row['1'] ." Телефон ". $row['2']. "<br>");
//}