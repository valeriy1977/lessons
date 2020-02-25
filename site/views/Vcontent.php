<?php
$sql = "SELECT content FROM pages WHERE id='{$_GET['id']}'";
$content = $db->sql($sql);
$text = $content[0]['content'];

function search_short_code($short_code, $text)
{
    $position = strpos($text, $short_code); // позиция где найден шорткод "["

    if($position !==FALSE)
    {
        $pos = $position+strlen($short_code); // позиция номера галереи
        $position_after_gallery = $pos+2; // позиция после номера галереи
        $gallery_number  = $text{$pos}; // номер галереи

        $sql = "SELECT image FROM gallery_images WHERE gallery_id='{$gallery_number}'";

        return ['sql'=>$sql, 'position'=>$position_after_gallery, 'gallery_number'=> $gallery_number];
    }
}


$images = search_short_code('[gallery-', $text); // массив

while (!empty($images['gallery_number']))
{
    $pictures = $db->sql($images['sql']);
    $pictures_for_content = '<p>';
    foreach ($pictures as $picture)
    {
        $pictures_for_content .=  "<img class = 'gallery_image' src='img/{$picture['image']}'>";
    }
    $pictures_for_content .= '</p>';
    $text = str_replace("[gallery-{$images['gallery_number']}]", $pictures_for_content, $text);

    $images = search_short_code('[gallery-', $text);

}

echo  $text;