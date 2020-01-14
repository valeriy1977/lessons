<?php
$sql = "SELECT content, gallery, gallery_id FROM pages WHERE id='{$_GET['id']}'";
$content= $db->sql($sql);

$search_gallery = '[gallery-';
$position = strpos($content[0]['content'], $search_gallery);

if($position !==FALSE)
{
    $pos = $position+9;
    $gallery_number  = $content[0]['content']{$pos};
  
    //$gallery_number = substr($content[0], $position);
    //echo "Галерея номер {$gallery_number}";

    $sql = "SELECT image FROM gallery_images WHERE gallery_id='{$gallery_number}'";
    $images = $db->sql($sql);

    foreach ($images as $images)
    {
        echo "<img class = 'gallery_image' src='img/{$images['image']}'>";
    }


}

//echo $content[0]['content'];



    



