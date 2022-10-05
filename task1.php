<?php

declare(strict_types=1);
$lineBreak = "<br>";
$student = " ";


echo "Владеете ли вы  языками программирования , да -1, нет -0." . $lineBreak;
function typeWhoAreYou($student)
{

    $lineBreak = "<br>";



    if ($student > 0) {
	    return "Здравствуйте уважаемый коллега,$lineBreak у вас есть возможность,стать  членом нашей команды, пришлите ваш email";}



        else {
        $myfile = fopen("https://skillbox.ru/course/profession-fullstack-dev/","r");
                while(!feof ($myfile)) {
            echo fgets($myfile) . $lineBreak;
        }
        // Вывести сайт
    }
     return feof ($myfile );
}

echo typeWhoAreYou(0);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title> </title>
    </head>
    <body>
            <form action = "form.php" method = "POST">
                Email:<input type = "text" name = "userName"/><br>
                password:<input type = "submit" name = "submit"/><br>
            <value = " Отправь меня!"/>
            </form>
    </body>
</html>



