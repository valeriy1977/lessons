<?php
namespace app\classes;

//автозагрузка классов
spl_autoload_register(function ($name)
{
    // конвертируем полный путь в пространстве имён с \ в /
    $name = str_replace('\\', '/', $name);

    require_once($name.'.php');
});

// создадим объекты
$pages = new CPage();
$gallery = new CGallery();
