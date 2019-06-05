Список страниц
<?php
$pages = new \app\classes\Db();
$all_pages = $pages->sql("SELECT id, menu_name FROM pages");

foreach ($all_pages as $page)
{
    echo "<ul>";
    echo "<li><a href='index.php?page=pageedit&id={$page['id']}'>{$page['menu_name']}</a></li>";
    echo "</ul>";
}