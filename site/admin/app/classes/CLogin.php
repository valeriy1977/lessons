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

    public function changePass($user)
    {
        echo $this->pass($user['oldpass']);
    }

}