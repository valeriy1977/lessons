<?php
require_once "lib/functions.php"; // подключение файла
//sum(3,5);
$data = db("SELECT menu_name,id FROM pages");

foreach ($data as $v)
{
        echo "<br><a href='index.php?page={$v['id']}'>{$v['menu_name']}</a><br>";
}

//sum(16,286);

