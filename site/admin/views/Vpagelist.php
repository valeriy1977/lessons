Список страниц
<?php
$all_pages = $pages->pagesList();

foreach ($all_pages as $page)
{
    echo "<ul>";
    echo "<li><a href='index.php?page=pageedit&id={$page['id']}'>{$page['menu_name']}</a></li>";
    echo "</ul>";
}