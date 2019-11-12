
Список страниц<br><br>
(<a class="page_add_edit"
    href="http://fontawesome.veliovgroup.com/design.html"
    title="список названий"
    target="_blank"
>
    список иконок
</a>)
<table id="pagelist">
    <tr class="table_header">
        <td>Название страницы</td>
        <td>Создана</td>
        <td>Отредактирована</td>
        <td>Отображать</td>
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
        <td>
            <?php
            if ($page['visible_in_main_menu'])
            {
                echo '<i class="icon-ok"></i>';
            }
            else
            {
                echo '<i class="icon-remove"></i>';
            }
            ?>
        </td>
        <td><a href='index.php?page=pageedit&id=<?=$page['id']?>'><i class="icon-pencil"></i></a></td>
        <td><a href='index.php?page=pagedelete&id=<?=$page['id']?>'><i class="icon-trash"></i></td>
    </tr>

<?php
}
?>
</table>
