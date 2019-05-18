<?php
namespace app\classes;

//автозагрузка классов
spl_autoload_register(function ($name)
{
    // конвертируем полный путь в пространстве имён с \ в /
    $name = str_replace('\\', '/', $name);

    require_once($name.'.php');
});

echo "<a href='index.php?page=logout'>Выход</a>";
require_once "router.php";
