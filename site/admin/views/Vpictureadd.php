<?php
$gallery_images = $gallery->getDeletedImages();

foreach ($gallery_images as $picture)
{
    $pictures_for_content .=  "<div class='gallery_image'><img class = 'gallery_image' src='../img/{$picture['image']}'> <a href='index.php?page=imageadd&imageid={$picture['id']}&galleryid={$_GET['galleryid']}'>добавить</a> </div>";
}

echo $pictures_for_content;
?>