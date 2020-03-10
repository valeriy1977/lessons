<?php


namespace app\classes;


class CGallery extends MGallery
{
    // добавить галерею
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

    // сохранить отредактированную галерею
    public function  saveGalleryAfterEdit($id,$post)
    {

        $sql = "UPDATE gallery SET ";

        foreach ($post as $key=>$value)
        {
            $sql .=" {$key}='{$value}', ";
        }

        $sql = substr($sql,0,-2);
        $sql .=" WHERE id='{$id}' ";

        $this->sql($sql);
    }
}