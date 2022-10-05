<?php
/*$a = array(1,2,3,17);
$i = 0;
foreach( $a as $v){
echo $i.$i++."<br>";}*/
$array =[ [1,2],
[3,4],];
foreach ($array as list($a,$b)){
    echo "A:$a,B:$b"."<br>";
}
$information = <<<INFO
Name:JohnSmith
Adress:123 Main Str
City:Springville,CA
INFO;
echo nl2br($information);
echo "<br>";

// кодировка;
$strEn = "Hello";
$strRu = "Привет";
echo $strEn."<br>";
echo $strRu."<br>";

//получение подстроки
 echo strpos("ПРИВЕТ МИР!","РИВЕТ")."<br>";
 echo strpos("hello world!","ello")."<br>";
 echo mb_strpos("ПРИВЕТ МИР!","ИР")."<br>";
 echo mb_strlen($strRu)."<br>";
 if(strpos("hello word!","hello")!==false){
     echo "Find!<br>";
 }
 //урок 10 "time"

