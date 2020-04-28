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

        <div class="form-group">
            <input type="submit" value="Сохранить">
        </div>
    </form>
    <a href="index.php?page=pictureadd&galleryid=<?=$_GET['id']?>">Добавить картинку</a>
    <?php


    foreach ($gallery_images as $picture)
    {
        $pictures_for_content .=  "<div class='gallery_image'><img class = 'gallery_image' src='../img/{$picture['image']}'> <a href='index.php?page=imagedelete&imageid={$picture['id']}&galleryid={$_GET['id']}'>удалить</a> </div>";
    }

    echo $pictures_for_content;
    ?>

</div>