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
        while ($row = mysqli_fetch_assoc($result)) // сохраняем одну строку c таблицы БД в $row
        {
            // сформируем новый массив $pages
            $pages[] = $row; // равен одной строке с БД
        }

/*        echo "<PRE>";
        var_export($pages);
        echo "</PRE>";*/

        // возвращаем сформированный массив
        return $pages;

   }

}

function sum($a,$b)
{
   $summa=$a+$b;
    if ($a>10 OR $b>10)
    {
        echo "Число должно быть меньше 10";
    }
    else
    {
        echo "cумма числа ".$a." и ".$b." равна ".$summa."<br>";
    }

}