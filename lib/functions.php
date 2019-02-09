<?php
// функция для подключения к БД
function db($sql)
{
    if($connection = mysqli_connect("localhost","valeriy",12345,"valeriy"))//подключаемся к БД)
    {
        //echo "Подключение с БД установлено";
        mysqli_query($connection,"SET NAMES UTF8"); // делаем запрос чтобы использовать русскую кодировку UTF-8
    }


   if($sql)
   {
        // в $result будут сырые данные
       $result = mysqli_query($connection,$sql);
        while ($row = mysqli_fetch_assoc($result))
        {
            // сформируем новый массив $pages
            $pages[] = $row; // равен одной строке с БД
        }

        echo "<PRE>";
        var_export($pages);
        echo "</PRE>";

        // возвращаем сформированный массив
        return $pages;

   }

}
