<?php
namespace app\classes;


class CPage extends MPage
{
    public function pagesList()
    {
        return $this->getPagesList();
    }

    public function pageForEdit($id)
    {
        return $this->getPageForEdit($id);
    }

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