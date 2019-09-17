<?php


namespace app\classes;


class MLogin extends Db
{
    protected function checkUser($user)
    {

        $sql = "SELECT id, name,surname FROM users WHERE login='{$user['login']}' AND pass='{$user['pass']}'";

        // делаем запрос в БД
        if($loged = $this->sql($sql))
        {
            // в сессионную переменную сохраняем имя и фамилию пользователя
            $_SESSION['loged'] = $loged[0]['name']." ".$loged[0]['surname'];
            $_SESSION['user_id'] = $loged[0]['id'];
            // перезагружаем страницу
            header('Refresh: 0');
        }
    }

    protected function checkPass($pass)
    {
        $sql = "SELECT login FROM users WHERE id='{$_SESSION['user_id']}' AND pass='{$pass}'";
        if ($this->sql($sql))
        {
            return true;
        }
    }

    protected function changeNewPass($new_pass)
    {
        $sql = "UPDATE users SET pass='{$new_pass}' WHERE id='{$_SESSION['user_id']}'";
        $this->sql($sql);
    }
}