<?php
$all_menus = $db->sql("SELECT menu_name,id FROM pages WHERE visible_in_main_menu = '1'");

$today = new \app\classes\Today();
$today->getTodayDate();

echo "<ul>\n";
foreach ($all_menus as $v)
{
    echo "\t<li><a href='index.php?Parameter=page&id={$v['id']}'>{$v['menu_name']}</a></li>\n";
}
echo "\t</ul>\n";
?>