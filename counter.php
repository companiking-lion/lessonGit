<?php
declare(strict_types=1);
$objects = [
    new squareCube(5),
    new Rectangle(2,5),
    new Circle(5)
    ];
foreach ($objects as $object){
    if($object instanceof CalculateSquare){
        echo 'Объект реализует интерфейс CalculateSquare.Площадь:'.$object -> CalculateSquare();
        echo '<br>';
    }
}

