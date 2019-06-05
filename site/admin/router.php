<?php
session_start();

// если пользователь залогинен
if ($_SESSION['loged'])
{
    if ($_GET)
    {
        // если нажали кнопку выход
        if ($_GET['page']=='logout')
        {
            unset($_SESSION['loged']);
            header('Refresh: 0; URL=../');
        }
    }

    require_once "views/Vmenu.php";

    if ($_GET)
    {
        switch ($_GET['page'])
        {
            case "pagelist":
                require_once "views/Vpagelist.php";
                break;
            case "pageedit":
                require_once "views/Vpageedit.php";
                break;
        }

    }
    if ($_POST)
    {

    }
}
// если пользователь не залогинен
else
{
    // если в форме была нажата кнопка вход
    if ($_POST)
    {
        // создаём объект для работы с БД
        $authorization = new \app\classes\Db();

        $salt1 = md5("Дом");
        $salt2 = md5("море");
        $pass = md5($salt1.md5($_POST['pass']).$salt2);

        $sql = "SELECT name,surname FROM users WHERE login='{$_POST['login']}' AND pass='{$pass}'";

        // делаем запрос в БД
        if($user = $authorization->sql($sql))
        {
            // в сессионную переменную сохраняем имя и фамилию пользователя
            $_SESSION['loged'] = $user[0]['name']." ".$user[0]['surname'];
            // перезагружаем страницу
            header('Refresh: 0');
        }

    }
    //подключаем форму для авторизации
    else
    {
        require_once "views/VloginForm.php";
    }
}







