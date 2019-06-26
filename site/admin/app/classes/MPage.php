<?php


namespace app\classes;


class MPage extends Db
{
    // список всех страниц
    protected function getPagesList()
    {
        $result = $this->sql("SELECT id, menu_name FROM pages");
        return $result;
    }

    // получить данные для конкретной страницы (редактирование)
    protected function getPageForEdit($id)
    {
        $sql = "SELECT * FROM pages WHERE id='$id'";
        $result = $this->sql($sql);
        return $result;
    }

    // сохранить отредактированную страницу
    protected function saveEditedPage($sql)
    {
        echo $sql;
        $this->sql($sql);
    }
}