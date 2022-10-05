<?php
$lineBreak = "<br>";
$visitCount = 0;
    if(isset($_COOKIE["visitCount"])){
        $visitCount = $_COOKIE["visitCount"]+1;
    }
    setcookie("visitCount" , $visitCount, strtotime("+30days"));
    print ("Вы посетили эту страницу" . $visitCount."раз.").$lineBreak;
    session_start();
    echo session_id();
    unset($_SESSION['password']);
    unset($_SESSION['login']);

    if (isset($_GET['submit'])){
        echo "
        <form>
        <input type= text name= 'login'>
        <input type= password name= 'passwd'>
        <input type= submit  name= 'submit' value= Войти></form>";}
            else{
                $_SESSION['login'] = $_GET['login'];
                $_SESSION['password'] = $_GET['passwd'];
        }
            if($_GET['login'] === "abc"&& $_GET['passwd'] === "123"){
    Header("Location: privatePage.php");
}else {echo "Неверный Логин или Пароль, попробуйте еще раз". $lineBreak;
}print_r($_SESSION);?>
