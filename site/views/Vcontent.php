<?php
$sql = "SELECT content, gallery, gallery_id FROM pages WHERE id='{$_GET['id']}'";
$content= $db->sql($sql);


echo $content[0]['content'];
if ($content[0]['gallery'])
{
    $sql = "SELECT image FROM gallery_images WHERE gallery_id='{$content[0]['gallery_id']}'";
    $images = $db->sql($sql);
    //var_export($images);
}

foreach ($images as $images)
{
    echo "<img class = 'gallery_image' src='img/{$images['image']}'>";
}