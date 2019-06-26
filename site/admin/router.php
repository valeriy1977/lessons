<?php
session_start();

// если пользователь залогинен
if ($_SESSION['loged'])
{
    require_once "views/Vmenu.php";

    if ($_GET)
    {
        switch ($_GET['page'])
        {
            // если нажали кнопку выход
            case "logout":
                unset($_SESSION['loged']);
                header('Refresh: 0; URL=../');
                break;
            // список страниц
            case "pagelist":
                require_once "views/Vpagelist.php";
                break;
            // редактирование страницы
            case "pageedit":
                require_once "views/Vpageedit.php";
                break;
        }

    }

    if ($_POST)
    {
        if ($_GET)
        {
            switch ($_GET['page'])
            {
                case "pageedit":
                    $pages->savePageAfterEdit($_GET['id'],$_POST);
                    break;
            }

        }
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







