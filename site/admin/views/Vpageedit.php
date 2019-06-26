<?php
$page = $pages->pageForEdit($_GET['id']);

echo "Редактирование страницы ".$page[0]['menu_name'];
?>
<form method="post">
    Название страницы в меню <input type="text" name="menu_name" value="<?=$page[0]['menu_name']?>"><br>
    Отображать в главном меню
    <select name="visible_in_main_menu">
        <option value="1">Отображать</option>
        <option value="0">Скрыть</option>
    </select>
    Текст страницы <textarea name="content"><?=$page[0]['content']?></textarea>
    <input type="submit" value="Сохранить">
</form>
