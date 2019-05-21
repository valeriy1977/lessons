<?php
namespace app\classes;


class Db extends Config
{
    protected $connection;

    public function __construct()
    {
        if($this->connection = mysqli_connect($this->host,$this->user,$this->pass,$this->db))//подключаемся к БД)
        {
            mysqli_query($this->connection,"SET NAMES UTF8"); // делаем запрос чтобы использовать русскую кодировку UTF-8
        }
    }


    public function sql($query)
    {
        if($query)
        {
            // в $result будут сырые данные
            $result = mysqli_query($this->connection,$query);
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



}