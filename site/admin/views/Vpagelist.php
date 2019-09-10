Список страниц<br><br>
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
        <td><?=date('d.m.Y в H:i:s', $page['created_at'])?></td>
        <td>
            <?php
            if($page['updated_at'])
            {
                echo date('d.m.Y в H:i:s', $page['updated_at']);
            }
            else
            {
                echo "нет изменений";
            }

            ?>
        </td>
        <td><a href='index.php?page=pageedit&id=<?=$page['id']?>'>редактировать</a></td>
        <td><a href='index.php?page=pagedelete&id=<?=$page['id']?>'>удалить</td>
    </tr>

<?php
}
?>
</table>