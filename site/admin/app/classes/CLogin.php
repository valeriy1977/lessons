<?php


namespace app\classes;


class CLogin extends MLogin
{
    protected function pass($pass)
    {
        $salt1 = md5("Дом");
        $salt2 = md5("море");
        $pass = md5($salt1.md5($pass).$salt2);

        return $pass;
    }

    public function login($user)
    {

        $user['pass'] = $this->pass($user['pass']);

        $this->checkUser($user);

    }

    public function compareTwo($one,$two)
    {
        if ($one == $two)
        {
            return true;
        }
    }

    public function changePass($user)
    {
        $pass = $this->pass($user['oldpass']); // шифруем старый пароль пользователя
        if ($this->checkPass($pass))// сверяем пароль с тем что лежит в БД
        {
            if ($this->compareTwo($user['newpass1'],$user['newpass2'])) // сверяем новые пароли
            {
                $new_pass = $this->pass($user['newpass1']);
                $this->changeNewPass($new_pass);
            }
        }



    }

}