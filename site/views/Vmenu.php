<?php
$all_menus = $db->sql("SELECT menu_name,id FROM pages");

echo "<ul class='menu'>\n";
foreach ($all_menus as $v)
{
    echo "\t<li><a href='index.php?parameter=page&id={$v['id']}'>{$v['menu_name']}</a></li>\n";
}
echo "<ul>\n";