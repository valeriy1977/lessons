<?php
$gallery_name = $gallery->getGalleryName($_GET['id']);
$gallery_images = $gallery->getGalleryImages($_GET['id']);
?>
<p>Редактирование галереи</p>

<div class="col-md-5 page-form">
    <form method="post">
        <div class="form-group">
            <label for="pageName">Название галереи "<?=$gallery_name[0]['gallery_name']?>"</label>
            <input class="form-control" type="text" name="gallery_name" placeholder="введите имя">
        </div>
        <!--
        <div class="form-group">
            <label for="visible">Отображать в главном меню</label>
            <select name="visible_in_main_menu" class="form-control" id="visible">
                <option value="1">Отображать</option>
                <option value="0">Скрыть</option>
            </select>
        </div>
        -->
        <div class="form-group">
            <input type="submit" value="Сохранить">
        </div>
    </form>
    <?php

    foreach ($gallery_images as $picture)
    {
        $pictures_for_content .=  "<div class='gallery_image'><img class = 'gallery_image' src='../img/{$picture['image']}'> <a href='index.php?page=imagedelete&imageid={$picture['id']}'>удалить</a> </div>";
    }

    echo $pictures_for_content;
    ?>

</div>