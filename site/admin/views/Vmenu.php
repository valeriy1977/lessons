<div id="top_menu" class="row">
    <div class="col-sm-3 loged">
            <?php
            echo $_SESSION['loged']." | <a href='index.php?page=changepass' title='изменить пароль'><i class=\"icon-cog\"></i> </a> | <a href='index.php?page=logout' title='выход'><i class=\"icon-level-up\"> </i></a>";
            ?>
    </div>
    <div class="col-sm menu">
        <a href="index.php?page=pagelist"><i class="icon-align-justify"> </i>Список страниц</a>
        <a href="index.php?page=pageadd"><i class="icon-plus"> </i>Добавить страницу</a>
        <a href="http://localhost/valeriy/site" target="_blank"><i class="icon-reply"></i> На сайт</a>
    </div>

</div>
