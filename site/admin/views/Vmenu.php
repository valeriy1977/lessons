<div id="top_menu" class="row">
    <div class="col-sm-3 loged">
            <?php
            echo $_SESSION['loged']." | <a href='index.php?page=changepass'>Изменить пароль</a> | <a href='index.php?page=logout'>Выход</a>";
            ?>
    </div>
    <div class="col-sm menu">
        <a href="index.php?page=pagelist">Список страниц</a>
        <a href="index.php?page=pageadd">Добавить страницу</a>
        <a href="http://localhost/valeriy/site" target="_blank">На сайт</a>
    </div>

</div>
