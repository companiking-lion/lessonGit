<?php
declare(strict_types=1);
//header('Localation:http://www.google.com/');
$name = 'TestCookie2';
$value = 'value_of_cookie1';
setcookie($name,$value);
echo '<pre>';
print_r($_COOKIE);
echo '</pre>';
/*session_start();
$_SESSION['param_one'] = 'value_two';*/
echo "Привет!";
