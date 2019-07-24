<?php


namespace app\classes;


class MLogin extends Db
{
    protected function checkUser($user)
    {

        $sql = "SELECT name,surname FROM users WHERE login='{$user['login']}' AND pass='{$user['pass']}'";

        // делаем запрос в БД
        if($loged = $this->sql($sql))
        {
            // в сессионную переменную сохраняем имя и фамилию пользователя
            $_SESSION['loged'] = $loged[0]['name']." ".$loged[0]['surname'];
            // перезагружаем страницу
            header('Refresh: 0');
        }
    }
}