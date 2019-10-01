<?php
namespace app\classes;


use mysql_xdevapi\Exception;

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
            try
            {
                $result = mysqli_query($this->connection,$query);

                while ($row = mysqli_fetch_assoc($result)) // сохраняем одну строку c таблицы БД в $row
                {
                    // сформируем новый массив $pages
                    $pages[] = $row; // равен одной строке с БД
                }

                // возвращаем сформированный массив
                return $pages;
            }catch (Exception $e) {
                echo 'возникла ошибка: ',  $e->getMessage(), "\n";
            }

        }
    }



}