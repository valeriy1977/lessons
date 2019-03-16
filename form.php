<form method="post">
Как вас зовут:
    <input type="text" name="imja">
    <input type="submit" value="Передать имя">
</form>

<a href="?imja=Валерий">Передать имя в ссылке</a><br>

<?php
if($_POST)
{
    echo "Здравствуйте, вас зовут ".$_POST['imja'];
}
elseif ($_GET)
{
    echo "Здравствуйте, вас зовут ".$_GET['imja'];
}
else
{
    echo "Вы не ввели своё имя";
}

