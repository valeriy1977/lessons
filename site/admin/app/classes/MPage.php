<?php


namespace app\classes;


class MPage extends Db
{
    protected function getPagesList()
    {
        $result = $this->sql("SELECT id, menu_name FROM pages");
        return $result;
    }

    protected function getPageForEdit($id)
    {
        echo $sql = "SELECT * FROM pages WHERE id='$id'";
        $result = $this->sql($sql);
        return $result;
    }
}