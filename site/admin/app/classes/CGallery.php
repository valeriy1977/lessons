<?php


namespace app\classes;


class CGallery extends Db
{
    // добавить страницу
    public function  addGallery($post)
    {

        $sql = "INSERT INTO gallery (";

        foreach ($post as $key=>$value)
        {
            $sql .="{$key}, ";
        }

        $sql = substr($sql,0,-2);
        $sql .=") VALUES(";

        foreach ($post as $key=>$value)
        {
            $sql .=" \"{$value}\", ";
        }

        $sql = substr($sql,0,-2);
        $sql .=")";

        $this->sql($sql);

    }
}