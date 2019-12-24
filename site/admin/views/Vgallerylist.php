
Список галерей<br><br>

<table id="pagelist">
    <tr class="table_header">
        <td>Название галереи</td>
        <td>Редактировать</td>
        <td>Удалить</td>
        <td>Код для вставки</td>
    </tr>
<?php
$galleries = $pages->getGallerysList();

foreach ($galleries as $gallery)
{
?>

    <tr>
        <td><?=$gallery['gallery_name']?></td>
        <td><a href='index.php?gallery=galleryedit&id=<?=$gallery['id']?>'><i class="icon-pencil"></i></a></td>
        <td><a href='index.php?gallery=gallerydelete&id=<?=$gallery['id']?>'><i class="icon-trash"></i></td>
        <td>[gallery-<?=$gallery['id']?>]</td>
    </tr>

<?php
}
?>
</table>
