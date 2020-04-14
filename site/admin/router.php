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
                // перезагружаем страницу
                header('Location: index.php?page=pagelist');
                break;
            // список галерей
            case "gallerylist":
                require_once "views/Vgallerylist.php";
                break;
            // редактирование галереи
            case "galleryedit":
                require_once "views/Vgalleryedit.php";
                break;
            // добавить галерею
            case "galleryadd":
                require_once "views/Vgalleryadd.php";
                break;
            // удалить галерею
            case "gallerydelete":
                $gallery->deleteGallery($_GET['id']);
                // перезагружаем страницу
                header('Location: index.php?page=gallerylist');
                break;
            // список картинок для добавления в галерею
            case "pictureadd":
                require_once "views/Vpictureadd.php";
                break;
            // добавление конкретной картинки в галерею
            case "imageadd":
                $gallery->addImageToGallery($_GET['galleryid'],$_GET['imageid']);
                //require_once "views/Vpictureadd.php";
                break;
            //  удалить картинку из галереи
            case "imagedelete":
                $gallery->imagedelete($_GET['imageid']);
                // перезагружаем страницу
                header("Location: index.php?page=galleryedit&id={$_GET['galleryid']}");
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
                    // перезагружаем страницу
                    header('Location: index.php?page=pagelist');
                    break;
                // редактирование галереи
                case "galleryedit":
                    $gallery->saveGalleryAfterEdit($_GET['id'],$_POST);
                    // обратно в список галерей
                    header('Location: index.php?page=gallerylist');
                    break;
                // добавить галерею
                case "galleryadd":
                    $gallery->addGallery($_POST);
                    // обратно в список галерей
                    header('Location: index.php?page=gallerylist');
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







