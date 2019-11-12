<?php


namespace app\classes;


class MPage extends Db
{
    // список всех страниц
    protected function getPagesList()
    {
        $result = $this->sql("SELECT id, menu_name, created_at, updated_at, visible_in_main_menu FROM pages");
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
        $this->sql($sql);
    }

    // удалить страницу
    public function deletePage($id)
    {
        $sql = "DELETE FROM pages WHERE id='{$id}'";
        $this->sql($sql);
    }

}