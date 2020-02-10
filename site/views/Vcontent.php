<?php
$sql = "SELECT content FROM pages WHERE id='{$_GET['id']}'";
$content= $db->sql($sql);

function search_short_code($short_code, $text)
{
    $position = strpos($text, $short_code);

    if($position !==FALSE)
    {
        $pos = $position+strlen($short_code);
        $gallery_number  = $text{$pos};

        $sql = "SELECT image FROM gallery_images WHERE gallery_id='{$gallery_number}'";
    }

    $position_after_gallery = $pos+2;
    return ['sql'=>$sql, 'position'=>$position_after_gallery, 'short_code_position'=>$position];
}

$images = search_short_code('[gallery-', $content[0]['content']);

while (!empty($images['short_code_position']))
{
    $images = $db->$sql($images['sql']);
    foreach ($images as $image)
    {
        echo "<img class = 'gallery_image' src='img/{$image['image']}'>";
    }

    $content = substr($content[0]['content'], $images['position']);
    $images = search_short_code('[gallery-', $content);
}
