<?php
declare(strict_types=1);
$Str = "Здравствуйте,Эдуард!";
$lineBreak =" <br>";
$str = "<b> А.С. Пушкин</b>";
$greeting = "{$Str}{$lineBreak} {$str}{$lineBreak}";
echo "$greeting";


$lukomorye = "У лукоморья дуб зеленый,";
$goldenChain = "златая цепь на дубе том,";
$cat = "и днем и ночью кот ученый,";
$chain = "все ходит по цепи кругом.";
$poem = "\"{$lukomorye}{$lineBreak}{$goldenChain}{$lineBreak}{$cat}{$lineBreak}{$chain}\"{$lineBreak}";
echo $poem;
