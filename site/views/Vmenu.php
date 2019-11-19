<?php
$all_menus = $db->sql("SELECT menu_name,id FROM pages WHERE visible_in_main_menu = '1'");

echo "<ul>\n";
foreach ($all_menus as $v)
{
    if($v['id'] == $_GET['id'])
    {
        $selected = "class='current_page'";
    }
    else
    {
        $selected = "";
    }

    echo "\t<li><a {$selected} href='index.php?Parameter=page&id={$v['id']}'>{$v['menu_name']}</a></li>\n";
}
echo "\t</ul>\n";
?>