<?php
namespace app\classes;

//автозагрузка классов
spl_autoload_register(function ($name)
{
    // конвертируем полный путь в пространстве имён с \ в /
    $name = str_replace('\\', '/', $name);

    require_once($name.'.php');
});

//создадим объекты
$db = new Db(); // для работы с БД

require_once "lib/functions.php"; // подключение библиотеки функций
require_once "header.php";
require_once "body.php";
require_once "footer.php";