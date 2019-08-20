Список страниц
<table id="pagelist">
    <tr class="table_header">
        <td>Название страницы</td>
        <td>Создана</td>
        <td>Отредактирована</td>
        <td>Редактировать</td>
        <td>Удалить</td>
    </tr>
<?php
$all_pages = $pages->pagesList();



foreach ($all_pages as $page)
{
?>

    <tr>
        <td><?=$page['menu_name']?></td>
        <td>-</td>
        <td>-</td>
        <td><a href='index.php?page=pageedit&id=<?=$page['id']?>'>редактировать</a></td>
        <td>удалить</td>
    </tr>

<?php
}
?>
</table>