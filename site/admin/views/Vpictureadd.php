<?php
$gallery_images = $gallery->getAllImages();

foreach ($gallery_images as $picture)
{
    $pictures_for_content .=  "<div class='gallery_image'><img class = 'gallery_image' src='../img/{$picture['image']}'> <a href='index.php?page=imageadd&imageid={$picture['id']}&galleryid={$_GET['galleryid']}'>добавить</a> </div>";
}

echo $pictures_for_content;
//$one =1;
//$two = 2;
//$sum = $one+$two;
//echo $one." + ".$two." равно ".$sum;
//?>
<?//="{$one} + {$two} равно {$sum}"?>


<a href='index.php?page=galleryedit&id=<?="{$_GET['galleryid']}"?>'>Обратно в галерею</a>