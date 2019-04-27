<?php
namespace app\classes;

spl_autoload_register(function ($name)
{
    // конвертируем полный путь в пространстве имён с \ в /
    $name = str_replace('\\', '/', $name);

    require_once($name.'.php');
});

require_once "lib/functions.php"; // подключение файла
//sum(3,5);

$dbobject = new Db(); //новый объект
$all_menus = $dbobject->sql("SELECT menu_name,id FROM pages");

foreach ($all_menus as $v)
{
        echo "<br><a href='index.php?page={$v['id']}'>{$v['menu_name']}</a><br>";
}

/*$sql = "SELECT content FROM pages WHERE id='{$_GET['page']}'";

$content = db($sql);

echo $content[0]['content'];*/

//sum(16,286);