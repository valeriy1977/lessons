<?php

// Поиск и замена.
$text = $content;
$sql = "SELECT content FROM pages WHERE id='{$_GET['id']}'";
$content = $db->sql($sql);
$search_gallery = '[gallery-';

preg_match_all("|\[\[gallery-\.(.*)\]\]|U", $text, $matches);
if (!empty($matches[1]))
{
    foreach ($matches[1] as $row)
    {
        $item = $db::getRow("SELECT content FROM pages WHERE '{$_GET['id']}'", $row);
        $replase = (empty($item[0]['content'])) ? '' : $item[0]['content'];
        $text = str_ireplace('[[gallery-' . $row . ']]', $replase, $text);
    }
}
//
$sql = "SELECT content FROM pages WHERE id='{$_GET['id']}'";
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

// добавить в массив с контентом картинки с галерей в цикле
$position_after_gallery = $pos+2;
$content[0]['content'] = substr($content[0]['content'], $position_after_gallery);
echo $content[0]['content'];



    



