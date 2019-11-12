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
            // если нажали кнопку изменить пароль
            case "changepass":
                require_once "views/VchangePass.php";
                break;
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
            // добавление страницы
            case "pageadd":
                require_once "views/Vpageadd.php";
                break;
            // удаление страницы
            case "pagedelete":
                $pages->deletePage($_GET['id']);
                break;
        }

    }

    if ($_POST)
    {
        if ($_GET)
        {
            switch ($_GET['page'])
            {
                // изменить пароль
                case "changepass":
                    $change_pass = new \app\classes\CLogin();
                    $change_pass->changePass($_POST);
                    break;
                // редактирование страницы
                case "pageedit":
                    $pages->savePageAfterEdit($_GET['id'],$_POST);
                    // перезагружаем страницу
                    header('Refresh: 0');
                    break;
                // добавление страницы
                case "pageadd":
                    $pages->addPage($_POST);
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
        $authorization = new \app\classes\CLogin();
        $authorization->login($_POST);
    }
    //подключаем форму для авторизации
    else
    {
        require_once "views/VloginForm.php";
    }
}







