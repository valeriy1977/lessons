<?php

$page = $pages->PageForEdit($_POST['id']);

echo "Редактирование страницы ".$page[0]['menu_name'];
?>
<form method="post">
    Название страницы в меню <input type="text" name="menu_name" value="<?=$page[0]['menu_name']?>">
    Текст страницы <textarea name="content"><?=$page[0]['content']?></textarea>
    <input type="submit" value="Сохранить">
</form>
