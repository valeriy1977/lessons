<?php
require_once "lib/functions.php"; // подключение файла
//sum(3,5);
$data = db("SELECT menu_name,id FROM pages");

foreach ($data as $v)
{
        echo "<br><a href='index.php?page={$v['id']}'>{$v['menu_name']}</a><br>";
}

$content = db("SELECT content FROM pages WHERE id='{$_GET['page']}'");
echo $content[0]['content'];

//sum(16,286);