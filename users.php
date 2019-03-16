<form method="post">
    Имя:
    <input type="text" name="name">
    Фамилия:
    <input type="text" name="surname">
    <input type="submit" value="Получить данные">
</form>
<?php
require_once "lib/functions.php"; // подключение файла

// сам запрос
$sql = "SELECT birth FROM users WHERE name='{$_POST['name']}' AND surname='{$_POST['surname']}'";

// выполняем запрос
$birth = db($sql);
echo "Год рождения: ".$birth[0]['birth'];

