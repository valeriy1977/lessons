<?php


namespace app\classes;


class CLogin extends MLogin
{
    public function login($user)
    {
        $salt1 = md5("Дом");
        $salt2 = md5("море");
        $pass = md5($salt1.md5($user['pass']).$salt2);

        $user['pass'] = $pass;

        $this->checkUser($user);

    }
}