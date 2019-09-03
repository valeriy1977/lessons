<?php
namespace app\classes;


class CPage extends MPage
{
    // список всех страниц
    public function pagesList()
    {
        return $this->getPagesList();
    }

    // получить данные для конкретной страницы (редактирование)
    public function pageForEdit($id)
    {
        return $this->getPageForEdit($id);
    }

    // сохранить отредактированную страницу
    public function  savePageAfterEdit($id,$post)
    {
        $dt=time();

        $sql = "UPDATE pages SET ";

        foreach ($post as $key=>$value)
        {
            $sql .=" {$key}='{$value}', ";
        }

        $sql = substr($sql,0,-2);
        $sql .=", updated_at='{$dt}' WHERE id='{$id}' ";


        $this->saveEditedPage($sql);
    }

    // добавить страницу
    public function  addPage($post)
    {
        $dt = time();

        $sql = "INSERT INTO pages (";

        foreach ($post as $key=>$value)
        {
            $sql .=" {$key}, ";
        }

        $sql = substr($sql,0,-2);
        $sql .=", created_at) VALUES(";

        foreach ($post as $key=>$value)
        {
            $sql .=" \"{$value}\", ";
        }

        $sql = substr($sql,0,-2);
        $sql .=", \"$dt\")";



        $this->saveEditedPage($sql);

    }


}