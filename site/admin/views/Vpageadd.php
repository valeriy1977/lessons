<?php
$galleries = $pages->getGallerysList();
?>

Добавление страницы
<div class="col-md-5 page-form">
    <form method="post">
        <div class="form-group">
            <label for="pageName">Название страницы в меню</label>
            <input class="form-control" type="text" name="menu_name" placeholder="текст">
        </div>
        <div class="form-group">
            <label for="visible">Отображать в главном меню</label>
            <select name="visible_in_main_menu" class="form-control" id="visible">
                <option value="1">Отображать</option>
                <option value="0">Скрыть</option>
            </select>
        </div>
        <div class="form-group">
            <label for="gallery">Отображать галлерею</label>
            <select name="gallery" class="form-control" id="gallery">

                <option value="0" selected>Скрыть</option>
                <option value="1">Отображать</option>

            </select>
        </div>
        <div class="form-group">
            <label for="gallery_id">Название галлереи</label>
            <select name="gallery_id" class="form-control" id="gallery_id">
                <?php
                foreach ($galleries as $gallery)
                {
                    if($page[0]['gallery_id'] == $gallery['id'])
                    {
                        $selected = 'selected';
                    }
                    else
                    {
                        $selected = '';
                    }
                    echo "<option value='{$gallery['id']}' $selected>{$gallery['gallery_name']} </option>";
                }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="page_text">Текст страницы </label>
            <textarea name="content" class="form-control" id="page_text" rows="3"></textarea>
            <br />
            <input type="submit" value="Сохранить">
        </div>
    </form>
</div>