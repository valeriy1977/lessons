<?php
$page = $pages->pageForEdit($_GET['id']);

echo "Редактирование страницы ".$page[0]['menu_name'];
?>
<form method="post">
    <div class="form-group">
        <label for="pageName">Название страницы в меню</label>
        <input type="text" name="menu_name" value="<?=$page[0]['menu_name']?>"><br>
    </div>

    <div class="form-group">
        <label for="visible">Отображать в главном меню</label>
        <select name="visible_in_main_menu">
            <option value="1">Отображать</option>
            <option value="0">Скрыть</option>
        </select>
    </div>

    <div class="form-group">
        <label for="page_text">Текст страницы </label>
        <textarea name="content"><?=$page[0]['content']?></textarea><br>
        <input type="submit" value="Сохранить">
    </div>

</form>
