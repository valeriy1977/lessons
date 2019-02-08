<?php
// функция для подключения к БД
function db()
{
    if($number = mysqli_connect("localhost","valeriy",12345,"valeriy"))//подключаемся к БД)
    {
        echo "Подключение с БД установлено";
    }

    mysqli_query($number,"SET NAMES UTF-8"); // делаем запрос чтобы использовать русскую кодировку UTF-8
}
