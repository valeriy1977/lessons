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
        $sql = "UPDATE pages SET ";

        foreach ($post as $key=>$value)
        {
            $sql .=" {$key}='{$value}', ";
        }

        $sql = substr($sql,0,-2);
        $sql .=" WHERE id='{$id}' ";

        $this->saveEditedPage($sql);
    }

}