<?php

declare(strict_types=1);
session_start();
$_SESSION['count'] = isset($_SESSION['count'])?++$_SESSION['count']:0;
echo "Количество посещения сайта" . $_SESSION['count'];
$cookie_name = 'username';
$cookie_value = 'cookie username';
setcookie($cookie_name,$cookie_value,time()+7200);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>"3 наиполезнейших совета начинающим программистам."</title>
</head>
<body>

<p>Зарегестрируйтесь пожалуйста </p>
<form action = "form.php" method = "post">
    Email:<input type = "text" name = "username"/><br>
    password:<input type="text" name="userpasswd"/><br>
    <input type = "submit" name = "submit"/><br>
    <value = " Отправь меня!"/>
</form>
<?php
echo @$_COOKIE['usename'];
?>
<p> И так начнем. Совет 1. <br> Cовет 2. Совет 3.</p>

</body>
</html>



