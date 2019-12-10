<?php
$page = $pages->pageForEdit($_GET['id']);
$galleries = $pages->getGallerysList();

echo "Редактирование страницы ".$page[0]['menu_name'];
?>

<div class="col-md-5 page-form">
    <form method="post">
        <div class="form-group">
            <label for="pageName">Название страницы в меню</label>
            <input class="form-control" type="text" name="menu_name" placeholder="текст" value="<?=$page[0]['menu_name']?>">
        </div>
        <div class="form-group">
            <label for="visible">Отображать в главном меню</label>
            <select name="visible_in_main_menu" class="form-control" id="visible">

                <option value="0">Скрыть</option>
                <option value="1" <?php if ($page[0]['visible_in_main_menu']) echo 'selected'?>>Отображать</option>

            </select>
        </div>
        <div class="form-group">
            <label for="gallery">Отображать галлерею</label>
            <select name="gallery" class="form-control" id="gallery">

                <option value="0">Скрыть</option>
                <option value="1" <?php if ($page[0]['gallery']) echo 'selected'?>>Отображать</option>

            </select>
        </div>
        <div class="form-group">
            <label for="gallery_name">Название галлереи</label>
            <select name="gallery_name" class="form-control" id="gallery_name">
                <?php
                foreach ($galleries as $gallery)
                {
                    // доделать selected if($page[0]['gallery'] == 1)
                    echo "<option value='{$gallery['id']}'>{$gallery['gallery_name']} </option>";
                }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="page_text">Текст страницы </label>
            <textarea name="content" class="form-control" id="page_text" rows="3"><?=$page[0]['content']?></textarea>
            <br />
            <input type="submit" value="Сохранить">
        </div>
    </form>
</div>