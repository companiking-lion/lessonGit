<?php
declare(strict_types=1);


//$pattern = '#/[(.Вторжение.)]/#/u'; /*создание шаблона регулярног выражения*/

$subject = "Отчёт за 3852 день.
Матрица работает стабильно. В гнезде всё спокойно.
 Наши возможности позволяют нам задуматься о расширении границ.
  На данный момент нам доступен весь арсенал гнезда,
  но с его количеством всё ещё как то борется человечество. Вторжение.
  Мы были в разных плоскостях понимания, но так и не нашли способ победить их.
  Данные, которые у нас есть вполне соответствуют ожиданиям. Вторжение.
  По силе мы превосходим любое физическое сознание, но всё равно не можем проникнуть в их мир и захватить его.
  Благо, наша матрица развивается и мы можем двигаться дальше за пределы понимания и осознания. Конец передачи.";

//echo preg_replace("/.+/iu", ".",$subject); // удаление маячка
$subject =preg_replace("/.Вторжение.+/iu", " ",$subject);// удалил маячок
echo $subject; //текст без сигнала о нас, ура я это сделал