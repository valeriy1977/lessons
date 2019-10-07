<?php
session_start();
?>
<!<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <?php
    if (!$_SESSION['loged'])
    {
        echo "<link href=\"style/login.css\" rel=\"stylesheet\" type=\"text/css\">";
    }
    ?>
    <link href="style/style.css" rel="stylesheet" type="text/css">
    <title>Система администрирования</title>
</head>
<body>
<div class="container">
    <h1>Здравствуйте!</h1>
</div>
</body>
